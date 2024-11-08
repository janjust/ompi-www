<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] RFC: async modex";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 13 18:00:38 2014" -->
<!-- isoreceived="20140113230038" -->
<!-- sent="Mon, 13 Jan 2014 15:00:37 -0800" -->
<!-- isosent="20140113230037" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] RFC: async modex" -->
<!-- id="CAMD57oc1cu9rMxQJWZFLFG+rXFP7nDkFCRyfsdBi2XJASz4KVA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CEF994AB.16C3D%bwbarre_at_sandia.gov" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] RFC: async modex<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-13 18:00:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13766.php">George Bosilca: "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<li><strong>Previous message:</strong> <a href="13764.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<li><strong>In reply to:</strong> <a href="13762.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: async modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13789.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<li><strong>Reply:</strong> <a href="13789.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What I want to do is make the current &quot;modex&quot; become a no-op, which means
<br>
we have a lazy modex. As I noted in my commit message, this scales horribly
<br>
if we don't, hence the MCA param requirement so people don't do this unless
<br>
their BTL/MTLs will support it.
<br>
<p>What I found when playing with that arrangement is that a BTL/MTL is going
<br>
to need or want data at first message, but that data may not be available
<br>
yet because that particular remote proc hasn't registered all of its modex
<br>
data yet. A beautiful race condition. So I was forced to block everyone at
<br>
&quot;modex&quot; just to ensure the remote data was available at time of request.
<br>
<p>If I remove the global &quot;barrier&quot; requirement, then I didn't want to &quot;block&quot;
<br>
on modex_recv as this is done on a per-proc basis. Even though one proc
<br>
isn't ready to return the data, another might be - and so I'd let you queue
<br>
up as many modex_recv calls as you like, resolving each of them as data
<br>
becomes available. This leaves the MPI layer free to send a message as soon
<br>
as the target remote proc is ready, without waiting for some other proc to
<br>
register its modex info.
<br>
<p>Make sense?
<br>
<p><p><p>On Mon, Jan 13, 2014 at 12:05 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Is there any place that this can actually be used?  It's a fairly large
</span><br>
<span class="quotelev1">&gt; change to the RTE interface (which we should try to keep stable), and I
</span><br>
<span class="quotelev1">&gt; can't convince myself that it's useful; in general, if a BTL or MTL is
</span><br>
<span class="quotelev1">&gt; asking for a piece of data, the MPI library is stuck until that data's
</span><br>
<span class="quotelev1">&gt; available.  I can see doing some lazy approach, but I can't see making the
</span><br>
<span class="quotelev1">&gt; modex_recv call non-blocking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/11/14 9:28 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;NOTE:  This will involve a change to the MPI-RTE interface
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;WHAT:  Modify modex_recv to add a callback function that will return the
</span><br>
<span class="quotelev2">&gt; &gt;requested data when it is available
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;WHY:    Enable faster startup on large scale systems by eliminating the
</span><br>
<span class="quotelev2">&gt; &gt;current mandatory modex barrier during MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;HOW:    The ompi_modex_recv functions will have callback function and
</span><br>
<span class="quotelev2">&gt; &gt;(void*)cbdata arguments added to them.
</span><br>
<span class="quotelev2">&gt; &gt;              An ompi_modex_recv_t struct will be defined that includes a
</span><br>
<span class="quotelev2">&gt; &gt;pointer to the returned data plus a &quot;bool active&quot;
</span><br>
<span class="quotelev2">&gt; &gt;              that can be used to detect when the data has been returned
</span><br>
<span class="quotelev2">&gt; &gt;if blocking is required.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              When a modex_recv is issued, ORTE will check for the
</span><br>
<span class="quotelev2">&gt; &gt;presence of the requested data and immediately
</span><br>
<span class="quotelev2">&gt; &gt;              issue a callback if the data is available. If the data is
</span><br>
<span class="quotelev2">&gt; &gt;not available, then ORTE will request the data from
</span><br>
<span class="quotelev2">&gt; &gt;              the remote process, and execute the callback when the
</span><br>
<span class="quotelev2">&gt; &gt;remote process returns it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              The current behavior of a blocking modex barrier will
</span><br>
<span class="quotelev2">&gt; &gt;remain the default - the new behavior will only take affect
</span><br>
<span class="quotelev2">&gt; &gt;               if specifically requested by the user via MCA param. With
</span><br>
<span class="quotelev2">&gt; &gt;this new behavior, the current call to &quot;modex&quot; in
</span><br>
<span class="quotelev2">&gt; &gt;               MPI_Init will become a &quot;no-op&quot; when the processes are
</span><br>
<span class="quotelev2">&gt; &gt;launched via mpirun - this will be executed in ORTE
</span><br>
<span class="quotelev2">&gt; &gt;               so that other RTEs that do not wish to support async modex
</span><br>
<span class="quotelev2">&gt; &gt;behavior are not impacted.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;WHEN:   No hurry on this as it is intended for 1.9, so let's say mid Feb.
</span><br>
<span class="quotelev2">&gt; &gt;Info on a branch will be made available in
</span><br>
<span class="quotelev2">&gt; &gt;               the near future.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;   Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;   Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13765/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13766.php">George Bosilca: "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<li><strong>Previous message:</strong> <a href="13764.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<li><strong>In reply to:</strong> <a href="13762.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: async modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13789.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<li><strong>Reply:</strong> <a href="13789.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>

<?
$subject_val = "Re: [OMPI devel] SHMEM v1.7 merge proposal";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 29 10:41:47 2013" -->
<!-- isoreceived="20131029144147" -->
<!-- sent="Tue, 29 Oct 2013 14:41:42 +0000" -->
<!-- isosent="20131029144142" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SHMEM v1.7 merge proposal" -->
<!-- id="8E25A938F00ED34D90F8C49322FDF192B4BB94_at_xmb-rcd-x09.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KyZBO02PX1ocHuXC_nKav7NqZErVS5==no020vVjctwOCw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SHMEM v1.7 merge proposal<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-29 10:41:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13159.php">Ralph Castain: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>Previous message:</strong> <a href="13157.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: SHMEM v1.7 merge proposal"</a>
<li><strong>In reply to:</strong> <a href="13149.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13159.php">Ralph Castain: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>Reply:</strong> <a href="13159.php">Ralph Castain: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>Reply:</strong> <a href="13160.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike,
<br>
<p>I've never personally used git2svn, but my understanding is that it would require us to essentially &quot;lock&quot; the repository to all other commits while you are using it, which isn't very friendly to the rest of the community.  Also, using git2svn probably wouldn't twiddle the SVN merge tracking metadata correctly.
<br>
<p>I think it would be better to simply handle this with &quot;svn merge&quot; and friends.
<br>
<p>-Dave
<br>
<p>On Oct 29, 2013, at 6:08 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; will it be ok, that once all is ready, we push git2svn branch for this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 29, 2013 at 12:35 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I think Brian's point is that it should be a SVN branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 29, 2013, at 3:27 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; This is exactly the way we handle it now. We have internal branch on top of v1.7 with all SHMEM code in it.
</span><br>
<span class="quotelev2">&gt; &gt; It runs mtt and other tests.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Once we done with all changes - we will provide patch (and branch direct access if needed) for GK.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind Regards
</span><br>
<span class="quotelev2">&gt; &gt; Mike.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Oct 29, 2013 at 1:02 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; All -
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph and I talked today about the logistics of bringing the OpenSHMEM
</span><br>
<span class="quotelev2">&gt; &gt; code to the 1.7 release branch, as it's now a fairly large set of changes
</span><br>
<span class="quotelev2">&gt; &gt; from the trunk.  What we propose is to follow the same proceedure we used
</span><br>
<span class="quotelev2">&gt; &gt; when merging in the RTE framework change, which is essentially a staging
</span><br>
<span class="quotelev2">&gt; &gt; branch.  So, Mellanox (as the one filing the CMR) would branch from 1.7,
</span><br>
<span class="quotelev2">&gt; &gt; bring the OpenSHMEM changes into that (and hopefully test), and then file
</span><br>
<span class="quotelev2">&gt; &gt; a single CMR for the changes from the branch.  If done properly, the GK
</span><br>
<span class="quotelev2">&gt; &gt; then only has to merge with --reintegrate and we're set.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let's talk about it on the call tomorrow, but that's the current proposal.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;   Brian W. Barrett
</span><br>
<span class="quotelev2">&gt; &gt;   Scalable System Software Group
</span><br>
<span class="quotelev2">&gt; &gt;   Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13159.php">Ralph Castain: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>Previous message:</strong> <a href="13157.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: SHMEM v1.7 merge proposal"</a>
<li><strong>In reply to:</strong> <a href="13149.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13159.php">Ralph Castain: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>Reply:</strong> <a href="13159.php">Ralph Castain: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>Reply:</strong> <a href="13160.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
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

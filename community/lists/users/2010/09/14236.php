<?
$subject_val = "Re: [OMPI users] send and receive buffer the same on root";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 16 12:59:11 2010" -->
<!-- isoreceived="20100916165911" -->
<!-- sent="Thu, 16 Sep 2010 10:58:47 -0600" -->
<!-- isosent="20100916165847" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send and receive buffer the same on root" -->
<!-- id="AANLkTimz=73gjMQxOdXcdG1hKBK-GFFe8RJP8v5jo890_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1284652884.6749.38.camel_at_alder.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] send and receive buffer the same on root<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-16 12:58:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14237.php">Jeff Squyres: "Re: [OMPI users] send and receive buffer the same  on root"</a>
<li><strong>Previous message:</strong> <a href="14235.php">Tom Rosmond: "[OMPI users] send and receive buffer the same  on root"</a>
<li><strong>In reply to:</strong> <a href="14235.php">Tom Rosmond: "[OMPI users] send and receive buffer the same  on root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14239.php">Tim Prince: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>Reply:</strong> <a href="14239.php">Tim Prince: "Re: [OMPI users] send and receive buffer the same on root"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's compiler specific I think.  I've done this with OpenMPI no problem,
<br>
however on one another cluster with ifort I've gotten error messages about
<br>
not using MPI_IN_PLACE.  So I think if it compiles, it should work fine.
<br>
<p>On Thu, Sep 16, 2010 at 10:01 AM, Tom Rosmond &lt;rosmond_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am working with a Fortran 90 code with many MPI calls like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call mpi_gatherv(x,nsize(rank+1),
</span><br>
<span class="quotelev1">&gt;     mpi_real,x,nsize,nstep,mpi_real,root,mpi_comm_world,mstat)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 'x' is allocated on root to be large enough to hold the results of the
</span><br>
<span class="quotelev1">&gt; gather, other arrays and parameters are defined correctly, and the code
</span><br>
<span class="quotelev1">&gt; runs as it should.  However, I am concerned that having the same send
</span><br>
<span class="quotelev1">&gt; and receive buffer on root is a violation of the MPI standard.  Am I
</span><br>
<span class="quotelev1">&gt; correct?  I am aware of the MPI_IN_PLACE feature that can be used in
</span><br>
<span class="quotelev1">&gt; this situation, by defining it as the send buffer at root.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fact that the code as written seems to work on most system we run on
</span><br>
<span class="quotelev1">&gt; (some with OpenMPI, some with proprietary MPI's) indicates that in spite
</span><br>
<span class="quotelev1">&gt; of the standard, implementations allow it.  Is this correct, or are we
</span><br>
<span class="quotelev1">&gt; just lucky.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; T. Rosmond
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14236/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14237.php">Jeff Squyres: "Re: [OMPI users] send and receive buffer the same  on root"</a>
<li><strong>Previous message:</strong> <a href="14235.php">Tom Rosmond: "[OMPI users] send and receive buffer the same  on root"</a>
<li><strong>In reply to:</strong> <a href="14235.php">Tom Rosmond: "[OMPI users] send and receive buffer the same  on root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14239.php">Tim Prince: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>Reply:</strong> <a href="14239.php">Tim Prince: "Re: [OMPI users] send and receive buffer the same on root"</a>
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

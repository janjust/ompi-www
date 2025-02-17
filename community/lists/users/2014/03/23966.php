<?
$subject_val = "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 10:30:33 2014" -->
<!-- isoreceived="20140325143033" -->
<!-- sent="Tue, 25 Mar 2014 09:30:30 -0500" -->
<!-- isosent="20140325143030" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-ROMIO-OrangeFS" -->
<!-- id="53319306.5020809_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="533190CF.5030807_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-ROMIO-OrangeFS<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 10:30:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23967.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23965.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>In reply to:</strong> <a href="23964.php">Rob Latham: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24004.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="24004.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
not sure honestly. Basically, as suggested in this email chain earlier,
<br>
I had to disable the PVFS2_IreadContig and PVFS2_IwriteContig routines
<br>
in ad_pvfs2.c to make the tests pass. Otherwise the tests worked but
<br>
produced wrong data. I did not have however the time to figure what
<br>
actually goes wrong underneath the hood.
<br>
<p>Edgar
<br>
<p>On 3/25/2014 9:21 AM, Rob Latham wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 03/25/2014 07:32 AM, Dave Love wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel &lt;gabriel_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am still looking into the PVFS2 with ROMIO problem with the 1.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; series, where (as I mentioned yesterday) the problem I am having right
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now is that the data is wrong. Not sure what causes it, but since I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; teach this afternoon again, it might be friday until I can digg into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was there any progress with this?  Otherwise, what version of PVFS2 is
</span><br>
<span class="quotelev2">&gt;&gt; known to work with OMPI 1.6?  Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Edgar, should I pick this up for MPICH, or was this fix specific to
</span><br>
<span class="quotelev1">&gt; OpenMPI ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23966/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23967.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23965.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>In reply to:</strong> <a href="23964.php">Rob Latham: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24004.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="24004.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
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

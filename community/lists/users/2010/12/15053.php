<?
$subject_val = "Re: [OMPI users] Help on Mpi derived datatype for class with static members";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  9 14:35:26 2010" -->
<!-- isoreceived="20101209193526" -->
<!-- sent="Thu, 9 Dec 2010 14:35:17 -0500" -->
<!-- isosent="20101209193517" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on Mpi derived datatype for class with static members" -->
<!-- id="0B33B222-716F-4749-9A02-A2EA4AFBF53D_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=jeMdu=H9x3zT9fXF5hBEgjGFTzss3y3POKaeY_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help on Mpi derived datatype for class with static members<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-09 14:35:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15054.php">Hicham Mouline: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Previous message:</strong> <a href="15052.php">David Zhang: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>In reply to:</strong> <a href="15052.php">David Zhang: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15056.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Btw why do you want to send he size around if it is a constant?
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Dec 9, 2010, at 12:30 , David Zhang wrote:
<br>
<p><span class="quotelev1">&gt; I would imagine block length be sizeof(int) + sizeof(double), with displacement [0, sizeof(int)+1] ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 9, 2010 at 7:46 AM, Santosh Ansumali &lt;ansumali_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 9, 2010 at 8:53 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; You will have to use the MPI_Type_create_struct (<a href="http://www.open-mpi.org/doc/v1.5/man3/MPI_Type_create_struct.3.php">http://www.open-mpi.org/doc/v1.5/man3/MPI_Type_create_struct.3.php</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My doubt is what it means to  compute blocklength and displacement for
</span><br>
<span class="quotelev1">&gt; static variable. For example, if I have a class
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; class testVect{
</span><br>
<span class="quotelev1">&gt; static const int size = 5;
</span><br>
<span class="quotelev1">&gt; double value[size] ;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and  I want to create MPI derived data to pack value.  How block
</span><br>
<span class="quotelev1">&gt; length and displacement needs to be computed in this case, considering
</span><br>
<span class="quotelev1">&gt; the fact that size is static?
</span><br>
<span class="quotelev1">&gt; Thanks for the help!
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Santosh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 8, 2010, at 16:04 , Santosh Ansumali wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   I am confused with the use of MPI derived datatype for classes with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; static member. How to create derived datatype for something like
</span><br>
<span class="quotelev3">&gt; &gt;&gt; class test{
</span><br>
<span class="quotelev3">&gt; &gt;&gt; static const int i=5;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; double data[5];
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for your help!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Santosh
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15054.php">Hicham Mouline: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Previous message:</strong> <a href="15052.php">David Zhang: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>In reply to:</strong> <a href="15052.php">David Zhang: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15056.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
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

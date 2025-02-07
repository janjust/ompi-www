<?
$subject_val = "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 13:00:25 2011" -->
<!-- isoreceived="20110301180025" -->
<!-- sent="Tue, 1 Mar 2011 13:00:15 -0500" -->
<!-- isosent="20110301180015" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unknown overhead in &amp;quot;mpirun -am ft-enable-cr&amp;quot;" -->
<!-- id="2AFCA018-C9C6-4FE0-B08C-9883D6A58133_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=yDQbsvbvW=oxeeeKWjAuO0uTmJ8tOoepv+kfp_at_mail.gmail.com" -->
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
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 13:00:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15766.php">Jeff Squyres: "Re: [OMPI users] RDMACM Differences"</a>
<li><strong>Previous message:</strong> <a href="15764.php">Jeff Squyres: "Re: [OMPI users] Basic question on portability"</a>
<li><strong>In reply to:</strong> <a href="../../2011/02/15743.php">Nguyen Toan: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15780.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have not had the time to look into the performance problem yet, and probably won't for a little while. Can you send me a small program that illustrates the performance problem, and I'll file a bug so we don't lose track of it.
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On Feb 25, 2011, at 1:31 PM, Nguyen Toan wrote:
<br>
<p><span class="quotelev1">&gt; Dear Josh,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you find out the problem? I still cannot progress anything.
</span><br>
<span class="quotelev1">&gt; Hope to hear some good news from you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nguyen Toan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Feb 13, 2011 at 3:04 PM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried the MCA parameter you mentioned but it did not help, the unknown overhead still exists.
</span><br>
<span class="quotelev1">&gt; Here I attach the output of 'ompi_info', both version 1.5 and 1.5.1.
</span><br>
<span class="quotelev1">&gt; Hope you can find out the problem.
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nguyen Toan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 9, 2011 at 11:08 PM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; It looks like the logic in the configure script is turning on the FT thread for you when you specify both '--with-ft=cr' and '--enable-mpi-threads'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send me the output of 'ompi_info'? Can you also try the MCA parameter that I mentioned earlier to see if that changes the performance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I there are many non-blocking sends and receives, there might be performance bug with the way the point-to-point wrapper is tracking request objects. If the above MCA parameter does not help the situation, let me know and I might be able to take a look at this next week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 9, 2011, at 1:40 AM, Nguyen Toan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Josh,
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the reply. I did not use the '--enable-ft-thread' option. Here is my build options:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CFLAGS=-g \
</span><br>
<span class="quotelev2">&gt; &gt; ./configure \
</span><br>
<span class="quotelev2">&gt; &gt; --with-ft=cr \
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpi-threads \
</span><br>
<span class="quotelev2">&gt; &gt; --with-blcr=/home/nguyen/opt/blcr \
</span><br>
<span class="quotelev2">&gt; &gt; --with-blcr-libdir=/home/nguyen/opt/blcr/lib \
</span><br>
<span class="quotelev2">&gt; &gt; --prefix=/home/nguyen/opt/openmpi \
</span><br>
<span class="quotelev2">&gt; &gt; --with-openib \
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My application requires lots of communication in every loop, focusing on MPI_Isend, MPI_Irecv and MPI_Wait. Also I want to make only one checkpoint per application execution for my purpose, but the unknown overhead exists even when no checkpoint was taken.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you have any other idea?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nguyen Toan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Feb 9, 2011 at 12:41 AM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; There are a few reasons why this might be occurring. Did you build with the '--enable-ft-thread' option?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If so, it looks like I didn't move over the thread_sleep_wait adjustment from the trunk - the thread was being a bit too aggressive. Try adding the following to your command line options, and see if it changes the performance.
</span><br>
<span class="quotelev2">&gt; &gt;  &quot;-mca opal_cr_thread_sleep_wait 1000&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There are other places to look as well depending on how frequently your application communicates, how often you checkpoint, process layout, ... But usually the aggressive nature of the thread is the main problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let me know if that helps.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 8, 2011, at 2:50 AM, Nguyen Toan wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi all,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am using the latest version of OpenMPI (1.5.1) and BLCR (0.8.2).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I found that when running an application,which uses MPI_Isend, MPI_Irecv and MPI_Wait,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; enabling C/R, i.e using &quot;-am ft-enable-cr&quot;, the application runtime is much longer than the normal execution with mpirun (no checkpoint was taken).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This overhead becomes larger when the normal execution runtime is longer.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Does anybody have any idea about this overhead, and how to eliminate it?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Nguyen
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15766.php">Jeff Squyres: "Re: [OMPI users] RDMACM Differences"</a>
<li><strong>Previous message:</strong> <a href="15764.php">Jeff Squyres: "Re: [OMPI users] Basic question on portability"</a>
<li><strong>In reply to:</strong> <a href="../../2011/02/15743.php">Nguyen Toan: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15780.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
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

<?
$subject_val = "Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  7 17:00:51 2010" -->
<!-- isoreceived="20100607210051" -->
<!-- sent="Mon, 7 Jun 2010 23:00:45 +0200" -->
<!-- isosent="20100607210045" -->
<!-- name="Jovana Knezevic" -->
<!-- email="jovana.knezevic.83_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages" -->
<!-- id="AANLkTimpHAnc3n0T99zOOm8L9R2LLLvI1sJnw8z7nWEr_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Behaviour of MPI_Cancel when using 'large' messages" -->
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
<strong>Subject:</strong> Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages<br>
<strong>From:</strong> Jovana Knezevic (<em>jovana.knezevic.83_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-07 17:00:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13244.php">S. Levent Yilmaz: "[OMPI users] segfault with -pernode on 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="13242.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Maybe in reply to:</strong> <a href="13236.php">Gijsbert Wiesenekker: "[OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13286.php">Jeff Squyres: "Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<li><strong>Reply:</strong> <a href="13286.php">Jeff Squyres: "Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gijsbert,
<br>
<p>I had the same problem few months ago. I even could not cancel the
<br>
messages for which I did not have a matching receive on the other side
<br>
(thus, they could not have been received! :-)). I was wondering really
<br>
what was going on... I have some experience with MPI, but I am not an
<br>
expert. I would really appreciate an explanation from the developers.
<br>
While &quot;google&quot;-ing the potential solution, I found out that some
<br>
distributions (not Open-MPI) do not allow canceling, thus, I think
<br>
that one cannot rely on MPI_Cancel(). If I am right, the question is
<br>
then: why implement it?! Is the logic behind &quot;better ever than never&quot;?
<br>
:-) So, use it when it is better to do the cancellation, but don't
<br>
really rely on it... ?! As I said, I am not an expert, but it would be
<br>
great to hear about this from them. If, however, YOU find any
<br>
solution, it would be great if you wrote about it on this list! Thanks
<br>
in advance.
<br>
<p>Regards,
<br>
Jovana Knezevic
<br>
<p>2010/6/7  &lt;users-request_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; 1. Re: mpi_iprobe not behaving as expect (David Zhang)
</span><br>
<span class="quotelev1">&gt; &#160; 2. Re: mpi_iprobe not behaving as expect (David Zhang)
</span><br>
<span class="quotelev1">&gt; &#160; 3. Re: mpi_iprobe not behaving as expect (David Zhang)
</span><br>
<span class="quotelev1">&gt; &#160; 4. Behaviour of MPI_Cancel when using 'large' messages
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;(Gijsbert Wiesenekker)
</span><br>
<span class="quotelev1">&gt; &#160; 5. Re: [sge::tight-integration] slot scheduling and &#160;resources
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;handling (Eloi Gaudry)
</span><br>
<span class="quotelev1">&gt; &#160; 6. ompi-restart, ompi-ps problem (Nguyen Kim Son)
</span><br>
<span class="quotelev1">&gt; &#160; 7. ompi-restart failed (Nguyen Toan)
</span><br>
<span class="quotelev1">&gt; &#160; 8. Re: ompi-restart failed (Nguyen Toan)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Sun, 6 Jun 2010 11:08:41 -0700
</span><br>
<span class="quotelev1">&gt; From: David Zhang &lt;solarbikedz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpi_iprobe not behaving as expect
</span><br>
<span class="quotelev1">&gt; To: users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;&lt;AANLkTincOZH2N7w3N0Z3eu4LBIkLBAF4n2uW5jQuQOon_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jun 5, 2010 at 2:44 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using mpi_iprobe to serve as a way to send signals between different
</span><br>
<span class="quotelev2">&gt;&gt; mpi executables. I'm using the following test codes (fortran):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #1
</span><br>
<span class="quotelev2">&gt;&gt; program send
</span><br>
<span class="quotelev2">&gt;&gt; implicit none
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; real*8 :: vec(20000)=1.0
</span><br>
<span class="quotelev2">&gt;&gt; integer :: ierr,i=0,request(1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; do
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; call mpi_isend(vec,20000,mpi_real8,
</span><br>
<span class="quotelev2">&gt;&gt; 0,1,mpi_comm_world,request(1),ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; i=i+1
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; print *,i
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; vec=-vec
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; call usleep_fortran(2.d0)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; call mpi_wait(request(1),MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; end do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; end program send
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #2
</span><br>
<span class="quotelev2">&gt;&gt; program send
</span><br>
<span class="quotelev2">&gt;&gt; implicit none
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; real*8 :: vec(20000)
</span><br>
<span class="quotelev2">&gt;&gt; integer :: ierr
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; do
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; if(key_present()) then
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; call
</span><br>
<span class="quotelev2">&gt;&gt; mpi_recv(vec,20000,mpi_real8,1,1,mpi_comm_world,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; end if
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; call usleep_fortran(0.05d0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; end do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; contains
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; function key_present()
</span><br>
<span class="quotelev2">&gt;&gt; implicit none
</span><br>
<span class="quotelev2">&gt;&gt; &#160; logical :: key_present
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; key_present = .false.
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; call
</span><br>
<span class="quotelev2">&gt;&gt; mpi_iprobe(1,1,mpi_comm_world,key_present,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; print *, key_present
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; end function key_present
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; end program send
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; The usleep_fortran is a routine I've written to pause the program for that
</span><br>
<span class="quotelev2">&gt;&gt; amount of time (in seconds). &#160;As you can see, on the receiving end I'm
</span><br>
<span class="quotelev2">&gt;&gt; probing to see whether the message has being received every 0.05 seconds,
</span><br>
<span class="quotelev2">&gt;&gt; where each probing would result a print of the probing result; while the
</span><br>
<span class="quotelev2">&gt;&gt; sending is once every 2 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doing
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 recv : -np 1 send
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Naturally I expect the output to be something like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; (fourty or so F)
</span><br>
<span class="quotelev2">&gt;&gt; T
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt; (another fourty or so F)
</span><br>
<span class="quotelev2">&gt;&gt; T
</span><br>
<span class="quotelev2">&gt;&gt; 3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; however this is the output I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; (fourty or so F)
</span><br>
<span class="quotelev2">&gt;&gt; T
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt; (about a two second delay)
</span><br>
<span class="quotelev2">&gt;&gt; T
</span><br>
<span class="quotelev2">&gt;&gt; 3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems to me that after the first set of probes, once the message was
</span><br>
<span class="quotelev2">&gt;&gt; received, the non-blocking mpi probe becomes blocking for some strange
</span><br>
<span class="quotelev2">&gt;&gt; reason. &#160;I'm using mpi_iprobe for the first time, so I'm not sure if I'm
</span><br>
<span class="quotelev2">&gt;&gt; doing something blatantly wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; David Zhang
</span><br>
<span class="quotelev2">&gt;&gt; University of California, San Diego
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Sun, 6 Jun 2010 11:35:29 -0700
</span><br>
<span class="quotelev1">&gt; From: David Zhang &lt;solarbikedz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpi_iprobe not behaving as expect
</span><br>
<span class="quotelev1">&gt; To: users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;&lt;15739_1275849354_o56IZn5f009814_AANLkTimVV-BOmw2rKnBQj26VHam0ndEfnk01ALh5LLu6_a&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have modified the code so that all the terminal outputs are done by one
</span><br>
<span class="quotelev1">&gt; executable. &#160;I have attached the source files, after compiling type &quot;make
</span><br>
<span class="quotelev1">&gt; go&quot; and the code will execute.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The previous code output was from a supercomputer cluster where the two
</span><br>
<span class="quotelev1">&gt; processes resides on two different nodes. &#160;When running the same code on a
</span><br>
<span class="quotelev1">&gt; regular-multiprocessor machine (mac mini in this case), I got this output:
</span><br>
<span class="quotelev1">&gt; &#160;F
</span><br>
<span class="quotelev1">&gt; &#160;F
</span><br>
<span class="quotelev1">&gt; &#160;T
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; 1
</span><br>
<span class="quotelev1">&gt; &#160;F
</span><br>
<span class="quotelev1">&gt; &#160;T
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; 2
</span><br>
<span class="quotelev1">&gt; &#160;F
</span><br>
<span class="quotelev1">&gt; &#160;T
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; 3
</span><br>
<span class="quotelev1">&gt; &#160;F
</span><br>
<span class="quotelev1">&gt; &#160;T
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I'm sending a message every 2 seconds and I'm polling every 0.05 second,
</span><br>
<span class="quotelev1">&gt; I would expect 39 F and 1 T between each number. &#160;At least when I ran it on
</span><br>
<span class="quotelev1">&gt; the supercomputer, this is true during the very beginning; however I don't
</span><br>
<span class="quotelev1">&gt; even see this when I'm running the code on my mac mini.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jun 5, 2010 at 2:44 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using mpi_iprobe to serve as a way to send signals between different
</span><br>
<span class="quotelev2">&gt;&gt; mpi executables. I'm using the following test codes (fortran):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #1
</span><br>
<span class="quotelev2">&gt;&gt; program send
</span><br>
<span class="quotelev2">&gt;&gt; implicit none
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; real*8 :: vec(20000)=1.0
</span><br>
<span class="quotelev2">&gt;&gt; integer :: ierr,i=0,request(1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; do
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; call mpi_isend(vec,20000,mpi_real8,
</span><br>
<span class="quotelev2">&gt;&gt; 0,1,mpi_comm_world,request(1),ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; i=i+1
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; print *,i
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; vec=-vec
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; call usleep_fortran(2.d0)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; call mpi_wait(request(1),MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; end do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; end program send
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #2
</span><br>
<span class="quotelev2">&gt;&gt; program send
</span><br>
<span class="quotelev2">&gt;&gt; implicit none
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; real*8 :: vec(20000)
</span><br>
<span class="quotelev2">&gt;&gt; integer :: ierr
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; do
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; if(key_present()) then
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; call
</span><br>
<span class="quotelev2">&gt;&gt; mpi_recv(vec,20000,mpi_real8,1,1,mpi_comm_world,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; end if
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; call usleep_fortran(0.05d0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; end do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; contains
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; function key_present()
</span><br>
<span class="quotelev2">&gt;&gt; implicit none
</span><br>
<span class="quotelev2">&gt;&gt; &#160; logical :: key_present
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; key_present = .false.
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; call
</span><br>
<span class="quotelev2">&gt;&gt; mpi_iprobe(1,1,mpi_comm_world,key_present,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; print *, key_present
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; end function key_present
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; end program send
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; The usleep_fortran is a routine I've written to pause the program for that
</span><br>
<span class="quotelev2">&gt;&gt; amount of time (in seconds). &#160;As you can see, on the receiving end I'm
</span><br>
<span class="quotelev2">&gt;&gt; probing to see whether the message has being received every 0.05 seconds,
</span><br>
<span class="quotelev2">&gt;&gt; where each probing would result a print of the probing result; while the
</span><br>
<span class="quotelev2">&gt;&gt; sending is once every 2 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doing
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 recv : -np 1 send
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Naturally I expect the output to be something like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; (fourty or so F)
</span><br>
<span class="quotelev2">&gt;&gt; T
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt; (another fourty or so F)
</span><br>
<span class="quotelev2">&gt;&gt; T
</span><br>
<span class="quotelev2">&gt;&gt; 3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; however this is the output I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; (fourty or so F)
</span><br>
<span class="quotelev2">&gt;&gt; T
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt; (about a two second delay)
</span><br>
<span class="quotelev2">&gt;&gt; T
</span><br>
<span class="quotelev2">&gt;&gt; 3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems to me that after the first set of probes, once the message was
</span><br>
<span class="quotelev2">&gt;&gt; received, the non-blocking mpi probe becomes blocking for some strange
</span><br>
<span class="quotelev2">&gt;&gt; reason. &#160;I'm using mpi_iprobe for the first time, so I'm not sure if I'm
</span><br>
<span class="quotelev2">&gt;&gt; doing something blatantly wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; David Zhang
</span><br>
<span class="quotelev2">&gt;&gt; University of California, San Diego
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; ** &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; **
</span><br>
<span class="quotelev1">&gt; ** WARNING: &#160;This email contains an attachment of a very suspicious type. &#160;**
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are absolutely &#160; &#160; **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate. &#160;Opening this attachment may cause irreparable &#160; **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files. &#160;If you have any questions &#160; &#160; &#160;**
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev1">&gt; ** &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail scanner. &#160; **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev1">&gt; Name: send_recv.zip
</span><br>
<span class="quotelev1">&gt; Type: application/zip
</span><br>
<span class="quotelev1">&gt; Size: 1578 bytes
</span><br>
<span class="quotelev1">&gt; Desc: not available
</span><br>
<span class="quotelev1">&gt; URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20100606/329462e9/attachment.zip">http://www.open-mpi.org/MailArchives/users/attachments/20100606/329462e9/attachment.zip</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Sun, 6 Jun 2010 18:36:57 +0000
</span><br>
<span class="quotelev1">&gt; From: David Zhang &lt;solarbikedz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpi_iprobe not behaving as expect
</span><br>
<span class="quotelev1">&gt; To: users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;1929187089.1275849417370_at_ace.smi&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This email contained a .zip file attachment. Raytheon does not allow email attachments that are considered likely to contain malicious code. For your protection this attachment has been removed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this email is from an unknown source, please simply delete this email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this email was expected, and it is from a known sender, you may follow the below suggested instructions to obtain these types of attachments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + Instruct the sender to enclose the file(s) in a &quot;.zip&quot; compressed file, and rename the &quot;.zip&quot; compressed file with a different extension, such as, &quot;.rtnzip&quot;. &#160;Password protecting the renamed &quot;.zip&quot; compressed file adds an additional layer of protection. When you receive the file, please rename it with the extension &quot;.zip&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additional instructions and options on how to receive these attachments can be found at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://security.it.ray.com/antivirus/extensions.html">http://security.it.ray.com/antivirus/extensions.html</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://security.it.ray.com/news/2007/zipfiles.html">http://security.it.ray.com/news/2007/zipfiles.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should you have any questions or difficulty with these instructions, please contact the Help Desk at 877.844.4712
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have modified the code so that all the terminal outputs are done by one
</span><br>
<span class="quotelev1">&gt; executable. &#160;I have attached the source files, after compiling type &quot;make
</span><br>
<span class="quotelev1">&gt; go&quot; and the code will execute.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The previous code output was from a supercomputer cluster where the two
</span><br>
<span class="quotelev1">&gt; processes resides on two different nodes. &#160;When running the same code on a
</span><br>
<span class="quotelev1">&gt; regular-multiprocessor machine (mac mini in this case), I got this output:
</span><br>
<span class="quotelev1">&gt; &#160;F
</span><br>
<span class="quotelev1">&gt; &#160;F
</span><br>
<span class="quotelev1">&gt; &#160;T
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; 1
</span><br>
<span class="quotelev1">&gt; &#160;F
</span><br>
<span class="quotelev1">&gt; &#160;T
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; 2
</span><br>
<span class="quotelev1">&gt; &#160;F
</span><br>
<span class="quotelev1">&gt; &#160;T
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; 3
</span><br>
<span class="quotelev1">&gt; &#160;F
</span><br>
<span class="quotelev1">&gt; &#160;T
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I'm sending a message every 2 seconds and I'm polling every 0.05 second,
</span><br>
<span class="quotelev1">&gt; I would expect 39 F and 1 T between each number. &#160;At least when I ran it on
</span><br>
<span class="quotelev1">&gt; the supercomputer, this is true during the very beginning; however I don't
</span><br>
<span class="quotelev1">&gt; even see this when I'm running the code on my mac mini.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jun 5, 2010 at 2:44 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using mpi_iprobe to serve as a way to send signals between different
</span><br>
<span class="quotelev2">&gt;&gt; mpi executables. I'm using the following test codes (fortran):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #1
</span><br>
<span class="quotelev2">&gt;&gt; program send
</span><br>
<span class="quotelev2">&gt;&gt; implicit none
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; real*8 :: vec(20000)=1.0
</span><br>
<span class="quotelev2">&gt;&gt; integer :: ierr,i=0,request(1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; do
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; call mpi_isend(vec,20000,mpi_real8,
</span><br>
<span class="quotelev2">&gt;&gt; 0,1,mpi_comm_world,request(1),ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; i=i+1
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; print *,i
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; vec=-vec
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; call usleep_fortran(2.d0)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; call mpi_wait(request(1),MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; end do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; end program send
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #2
</span><br>
<span class="quotelev2">&gt;&gt; program send
</span><br>
<span class="quotelev2">&gt;&gt; implicit none
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; real*8 :: vec(20000)
</span><br>
<span class="quotelev2">&gt;&gt; integer :: ierr
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; do
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; if(key_present()) then
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; call
</span><br>
<span class="quotelev2">&gt;&gt; mpi_recv(vec,20000,mpi_real8,1,1,mpi_comm_world,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; end if
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; call usleep_fortran(0.05d0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; end do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; contains
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; function key_present()
</span><br>
<span class="quotelev2">&gt;&gt; implicit none
</span><br>
<span class="quotelev2">&gt;&gt; &#160; logical :: key_present
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; key_present = .false.
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; call
</span><br>
<span class="quotelev2">&gt;&gt; mpi_iprobe(1,1,mpi_comm_world,key_present,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; print *, key_present
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; end function key_present
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; end program send
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; The usleep_fortran is a routine I've written to pause the program for that
</span><br>
<span class="quotelev2">&gt;&gt; amount of time (in seconds). &#160;As you can see, on the receiving end I'm
</span><br>
<span class="quotelev2">&gt;&gt; probing to see whether the message has being received every 0.05 seconds,
</span><br>
<span class="quotelev2">&gt;&gt; where each probing would result a print of the probing result; while the
</span><br>
<span class="quotelev2">&gt;&gt; sending is once every 2 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doing
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 recv : -np 1 send
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Naturally I expect the output to be something like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; (fourty or so F)
</span><br>
<span class="quotelev2">&gt;&gt; T
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt; (another fourty or so F)
</span><br>
<span class="quotelev2">&gt;&gt; T
</span><br>
<span class="quotelev2">&gt;&gt; 3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; however this is the output I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; (fourty or so F)
</span><br>
<span class="quotelev2">&gt;&gt; T
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt; (about a two second delay)
</span><br>
<span class="quotelev2">&gt;&gt; T
</span><br>
<span class="quotelev2">&gt;&gt; 3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems to me that after the first set of probes, once the message was
</span><br>
<span class="quotelev2">&gt;&gt; received, the non-blocking mpi probe becomes blocking for some strange
</span><br>
<span class="quotelev2">&gt;&gt; reason. &#160;I'm using mpi_iprobe for the first time, so I'm not sure if I'm
</span><br>
<span class="quotelev2">&gt;&gt; doing something blatantly wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; David Zhang
</span><br>
<span class="quotelev2">&gt;&gt; University of California, San Diego
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; ** &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; **
</span><br>
<span class="quotelev1">&gt; ** WARNING: &#160;This email contains an attachment of a very suspicious type. &#160;**
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are absolutely &#160; &#160; **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate. &#160;Opening this attachment may cause irreparable &#160; **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files. &#160;If you have any questions &#160; &#160; &#160;**
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev1">&gt; ** &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail scanner. &#160; **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Mon, 7 Jun 2010 07:53:19 +0200
</span><br>
<span class="quotelev1">&gt; From: Gijsbert Wiesenekker &lt;gijsbert.wiesenekker_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Behaviour of MPI_Cancel when using 'large'
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;messages
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;30252122-5026-42E7-BB9B-CA670E7C9523_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following code tries to send a message, but if it takes too long the message is cancelled:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;#define DEADLOCK_ABORT &#160; (30.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;MPI_Isend(message, count, MPI_BYTE, comm_id,
</span><br>
<span class="quotelev1">&gt; &#160; &#160;MPI_MESSAGE_TAG, MPI_COMM_WORLD, &amp;request);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;t0 = time(NULL);
</span><br>
<span class="quotelev1">&gt; &#160;cancelled = FALSE;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;while(TRUE)
</span><br>
<span class="quotelev1">&gt; &#160;{
</span><br>
<span class="quotelev1">&gt; &#160; &#160;//do some work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;//test if message is delivered or cancelled
</span><br>
<span class="quotelev1">&gt; &#160; &#160;MPI_Test(&amp;request, &amp;flag, &amp;status);
</span><br>
<span class="quotelev1">&gt; &#160; &#160;if (flag) break;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;//test if it takes too long
</span><br>
<span class="quotelev1">&gt; &#160; &#160;t1 = time(NULL);
</span><br>
<span class="quotelev1">&gt; &#160; &#160;wall = difftime(t1, t0);
</span><br>
<span class="quotelev1">&gt; &#160; &#160;if (!cancelled and (wall &gt; DEADLOCK_ABORT))
</span><br>
<span class="quotelev1">&gt; &#160; &#160;{
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;MPI_Cancel(&amp;request);
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;cancelled = TRUE;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;my_printf(&quot;cancelled!\n&quot;);
</span><br>
<span class="quotelev1">&gt; &#160; &#160;}
</span><br>
<span class="quotelev1">&gt; &#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now if I use a message size of about 5000 bytes and the message cannot be delivered after DEADLOCK_ABORT seconds the MPI_Cancel is executed, but still MPI_Test never returns TRUE, so it looks like the message cannot be cancelled for some reason.
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.4.2 on Fedora Core 13.
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Gijsbert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 5
</span><br>
<span class="quotelev1">&gt; Date: Mon, 7 Jun 2010 09:50:26 +0200
</span><br>
<span class="quotelev1">&gt; From: Eloi Gaudry &lt;eg_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] [sge::tight-integration] slot scheduling and
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;resources handling
</span><br>
<span class="quotelev1">&gt; To: Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;201006070950.26323.eg_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: Text/Plain; &#160;charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Reuti,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been unable to reproduce the issue so far.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the convenience,
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday 25 May 2010 11:32:44 Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 25.05.2010 um 09:14 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I do no reset any environment variable during job submission or job
</span><br>
<span class="quotelev3">&gt;&gt; &gt; handling. Is there a simple way to check that openmpi is working as
</span><br>
<span class="quotelev3">&gt;&gt; &gt; expected with SGE tight integration (as displaying environment
</span><br>
<span class="quotelev3">&gt;&gt; &gt; variables, setting options on the command line, etc. ) ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a) put a command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; env
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in the jobscript and check the output for $JOB_ID and various $SGE_*
</span><br>
<span class="quotelev2">&gt;&gt; variables.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; b) to confirm the misbehavior: are the tasks on the slave nodes kids of
</span><br>
<span class="quotelev2">&gt;&gt; sge_shepherd or any system sshd/rshd?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Eloi
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Friday 21 May 2010 17:35:24 Reuti wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Am 21.05.2010 um 17:19 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Hi Reuti,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Yes, the openmpi binaries used were build after having used the
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; --with-sge during configure, and we only use those binaries on our
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; cluster.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; [eg_at_moe:~]$ /opt/openmpi-1.3.3/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA ras: gridengine (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;v1.3.3)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ok. As you have a Tight Integration as goal and set in your PE
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &quot;control_slaves TRUE&quot;, SGE wouldn't allow `qrsh -inherit ...` to nodes
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; which are not in the list of granted nodes. So it looks, like your job
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; is running outside of this Tight Integration with its own `rsh`or
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; `ssh`.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Do you reset $JOB_ID or other environment variables in your jobscript,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; which could trigger Open MPI to assume that it's not running inside SGE?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; On Friday 21 May 2010 16:01:54 Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Am 21.05.2010 um 14:11 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; I'm observing something strange on our cluster managed by SGE6.2u4
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; when launching a parallel computation on several nodes, using
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; OpenMPI/SGE tight- integration mode (OpenMPI-1.3.3). It seems that
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; the SGE allocated slots are not used by OpenMPI, as if OpenMPI was
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; doing is own
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; round-robin allocation based on the allocated node hostnames.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; you compiled Open MPI with --with-sge (and recompiled your
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; applications)? You are using the correct mpiexec?
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Here is what I'm doing:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; - launch a parallel computation involving 8 processors, using for
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; each of them 14GB of memory. I'm using a qsub command where i
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; request memory_free resource and use tight integration with openmpi
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; - 3 servers are available:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; . barney with 4 cores (4 slots) and 32GB
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; . carl with 4 cores (4 slots) and 32GB
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; . charlie with 8 cores (8 slots) and 64GB
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Here is the output of the allocated nodes (OpenMPI output):
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; ====================== &#160; ALLOCATED NODES &#160; ======================
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Data for node: Name: charlie &#160; Launch id: -1 Arch: ffc91200 &#160;State: 2
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Daemon: [[44332,0],0] Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Num slots: 4 &#160;Slots in use: 0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Num slots allocated: 4 &#160;Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Num procs: 0 &#160;Next node_rank: 0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Data for node: Name: carl.fft &#160; &#160;Launch id: -1 Arch: 0 State: 2
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Daemon: Not defined Daemon launched: False
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Num slots: 2 &#160;Slots in use: 0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Num slots allocated: 2 &#160;Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Num procs: 0 &#160;Next node_rank: 0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Data for node: Name: barney.fft &#160; &#160;Launch id: -1 Arch: 0 State: 2
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Daemon: Not defined Daemon launched: False
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Num slots: 2 &#160;Slots in use: 0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Num slots allocated: 2 &#160;Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Num procs: 0 &#160;Next node_rank: 0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Here is what I see when my computation is running on the cluster:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; # &#160; &#160; rank &#160; &#160; &#160; pid &#160; &#160; &#160; &#160; &#160;hostname
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; 0 &#160; &#160; 28112 &#160; &#160; &#160; &#160; &#160;charlie
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; 1 &#160; &#160; 11417 &#160; &#160; &#160; &#160; &#160;carl
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; 2 &#160; &#160; 11808 &#160; &#160; &#160; &#160; &#160;barney
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; 3 &#160; &#160; 28113 &#160; &#160; &#160; &#160; &#160;charlie
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; 4 &#160; &#160; 11418 &#160; &#160; &#160; &#160; &#160;carl
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; 5 &#160; &#160; 11809 &#160; &#160; &#160; &#160; &#160;barney
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; 6 &#160; &#160; 28114 &#160; &#160; &#160; &#160; &#160;charlie
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; 7 &#160; &#160; 11419 &#160; &#160; &#160; &#160; &#160;carl
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Note that -the parallel environment used under SGE is defined as:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; [eg_at_moe:~]$ qconf -sp round_robin
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; pe_name &#160; &#160; &#160; &#160; &#160; &#160;round_robin
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; slots &#160; &#160; &#160; &#160; &#160; &#160; &#160;32
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; user_lists &#160; &#160; &#160; &#160; NONE
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; xuser_lists &#160; &#160; &#160; &#160;NONE
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; start_proc_args &#160; &#160;/bin/true
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; stop_proc_args &#160; &#160; /bin/true
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; allocation_rule &#160; &#160;$round_robin
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; control_slaves &#160; &#160; TRUE
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; job_is_first_task &#160;FALSE
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; urgency_slots &#160; &#160; &#160;min
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; accounting_summary FALSE
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; I'm wondering why OpenMPI didn't use the allocated nodes chosen by
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; SGE (cf. &quot;ALLOCATED NODES&quot; report) but instead allocate each job of
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; the parallel computation at a time, using a round-robin method.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Note that I'm using the '--bynode' option in the orterun command
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; line. If the behavior I'm observing is simply the consequence of
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; using this option, please let me know. This would eventually mean
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; that one need to state that SGE tight- integration has a lower
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; priority on orterun behavior than the different command line
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; options.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Any help would be appreciated,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eloi Gaudry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Free Field Technologies
</span><br>
<span class="quotelev1">&gt; Axis Park Louvain-la-Neuve
</span><br>
<span class="quotelev1">&gt; Rue Emile Francqui, 1
</span><br>
<span class="quotelev1">&gt; B-1435 Mont-Saint Guibert
</span><br>
<span class="quotelev1">&gt; BELGIUM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Company Phone: +32 10 487 959
</span><br>
<span class="quotelev1">&gt; Company Fax: &#160; +32 10 454 626
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 6
</span><br>
<span class="quotelev1">&gt; Date: Mon, 7 Jun 2010 10:48:24 +0200
</span><br>
<span class="quotelev1">&gt; From: Nguyen Kim Son &lt;nguyenkims_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] ompi-restart, ompi-ps problem
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;&lt;AANLkTimhDRXjPkXUahL7c3_fCAsr6YuuBFXd7eHIHz2q_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'n trying to get functions like orte-checkpoint, orte-restart,... works but
</span><br>
<span class="quotelev1">&gt; there are some errors that I don't have any clue about.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Blcr (0.8.2) works fine apparently and &#160;I have installed openmpi 1.4.2 from
</span><br>
<span class="quotelev1">&gt; source with option blcr.
</span><br>
<span class="quotelev1">&gt; The command
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 &#160;-am ft-enable-cr ./checkpoint_test
</span><br>
<span class="quotelev1">&gt; seemed OK but
</span><br>
<span class="quotelev1">&gt; orte-checkpoint --term PID_of_checkpoint_test ( obtaining after ps -ef |
</span><br>
<span class="quotelev1">&gt; grep mpirun )
</span><br>
<span class="quotelev1">&gt; does not return and shows nothing like errors!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, I checked with
</span><br>
<span class="quotelev1">&gt; ompi-ps
</span><br>
<span class="quotelev1">&gt; this time, I obtain:
</span><br>
<span class="quotelev1">&gt; oob-tcp: Communication retries exceeded. &#160;Can not communicate with peer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone has the same problem?
</span><br>
<span class="quotelev1">&gt; Any idea is welcomed!
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Son.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Son NGUYEN KIM
</span><br>
<span class="quotelev1">&gt; Antibes 06600
</span><br>
<span class="quotelev1">&gt; Tel: 06 48 28 37 47
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 7
</span><br>
<span class="quotelev1">&gt; Date: Mon, 7 Jun 2010 23:51:07 +0900
</span><br>
<span class="quotelev1">&gt; From: Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] ompi-restart failed
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;&lt;AANLkTim9RGFfS_rCFDYKHVz0vSnLt86upHVMqg3reU7N_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.4.2 with BLCR 0.8.2 to test checkpointing on 2 nodes but
</span><br>
<span class="quotelev1">&gt; it failed to restart (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; Here are the details concerning my problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + OS: Centos 5.4
</span><br>
<span class="quotelev1">&gt; + OpenMPI configure:
</span><br>
<span class="quotelev1">&gt; ./configure --with-ft=cr --enable-ft-thread --enable-mpi-threads \
</span><br>
<span class="quotelev1">&gt; --with-blcr=/home/nguyen/opt/blcr
</span><br>
<span class="quotelev1">&gt; --with-blcr-libdir=/home/nguyen/opt/blcr/lib \
</span><br>
<span class="quotelev1">&gt; --prefix=/home/nguyen/opt/openmpi \
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; + mpirun -am ft-enable-cr -machinefile host ./test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checkpointed the test program using &quot;ompi-checkpoint -v -s PID&quot; and the
</span><br>
<span class="quotelev1">&gt; checkpoint file was created successfully. However it failed to restart using
</span><br>
<span class="quotelev1">&gt; ompi-restart:
</span><br>
<span class="quotelev1">&gt; *&quot;mpirun noticed that process rank 0 with PID 21242 on node rc014.local
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault)&quot;
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; Did I miss something in the installation of OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nguyen Toan
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 8
</span><br>
<span class="quotelev1">&gt; Date: Tue, 8 Jun 2010 00:07:33 +0900
</span><br>
<span class="quotelev1">&gt; From: Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] ompi-restart failed
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;&lt;AANLkTilKHa9fpBiNDtaL_tpBWtShsf5soVvHWzisSIgD_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I just want to add 2 more things:
</span><br>
<span class="quotelev1">&gt; + I tried configure with and without --enable-ft-thread but nothing changed
</span><br>
<span class="quotelev1">&gt; + I also applied this patch for OpenMPI here and reinstalled but I got the
</span><br>
<span class="quotelev1">&gt; same error
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/2139/v1.4-preload-part1.diff">https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/2139/v1.4-preload-part1.diff</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somebody helps? Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nguyen Toan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 7, 2010 at 11:51 PM, Nguyen Toan &lt;nguyentoan1508_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using OpenMPI 1.4.2 with BLCR 0.8.2 to test checkpointing on 2 nodes
</span><br>
<span class="quotelev2">&gt;&gt; but it failed to restart (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; Here are the details concerning my problem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; + OS: Centos 5.4
</span><br>
<span class="quotelev2">&gt;&gt; + OpenMPI configure:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --with-ft=cr --enable-ft-thread --enable-mpi-threads \
</span><br>
<span class="quotelev2">&gt;&gt; --with-blcr=/home/nguyen/opt/blcr
</span><br>
<span class="quotelev2">&gt;&gt; --with-blcr-libdir=/home/nguyen/opt/blcr/lib \
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/home/nguyen/opt/openmpi \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt;&gt; + mpirun -am ft-enable-cr -machinefile host ./test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I checkpointed the test program using &quot;ompi-checkpoint -v -s PID&quot; and the
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint file was created successfully. However it failed to restart using
</span><br>
<span class="quotelev2">&gt;&gt; ompi-restart:
</span><br>
<span class="quotelev2">&gt;&gt; *&quot;mpirun noticed that process rank 0 with PID 21242 on node rc014.local
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 11 (Segmentation fault)&quot;
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; Did I miss something in the installation of OpenMPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Nguyen Toan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 1594, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13244.php">S. Levent Yilmaz: "[OMPI users] segfault with -pernode on 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="13242.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Maybe in reply to:</strong> <a href="13236.php">Gijsbert Wiesenekker: "[OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13286.php">Jeff Squyres: "Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<li><strong>Reply:</strong> <a href="13286.php">Jeff Squyres: "Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
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

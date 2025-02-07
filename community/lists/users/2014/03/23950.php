<?
$subject_val = "Re: [OMPI users] delays in Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 16:50:43 2014" -->
<!-- isoreceived="20140324205043" -->
<!-- sent="Mon, 24 Mar 2014 13:50:41 -0700" -->
<!-- isosent="20140324205041" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] delays in Isend" -->
<!-- id="1395694241.27857.70.camel_at_localhost" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A43E8468-F1B3-4F86-97AB-751D405CB0CF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] delays in Isend<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-24 16:50:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23951.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Previous message:</strong> <a href="23949.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>In reply to:</strong> <a href="23944.php">Ralph Castain: "Re: [OMPI users] delays in Isend"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2014-03-24 at 07:59 -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I suspect the root cause of the problem here lies in how MPI messages are progressed. OMPI doesn't have an async progress method (yet), and so messaging on both send and recv ends is only progressed when the app calls the MPI library. It sounds like your app issues an isend or recv, and then spends a bunch of time computing before calling back into the MPI library again. If so, then the messaging can't progress during the time you are computing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I switched to Send from ISend just for the messages that were hanging
<br>
up.  This seems to perform well, which is a little surprising since the
<br>
original implementation that was all Send performed poorly.
<br>
<p>I think the key is that the processes which mostly are busy computing
<br>
are doing the Send, while inbound messages arrive via Isend so that the
<br>
sender doesn't need to wait for the target to become available.
<br>
<p>Thanks for your help.
<br>
<p>Ross
<br>
<span class="quotelev1">&gt; On Mar 22, 2014, at 2:44 PM, Bennet Fauber &lt;bennet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi, Ross,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Just out of curiosity, is Rmpi required for some package that you're
</span><br>
<span class="quotelev2">&gt; &gt; using?  I only ask because, if you're mostly writing your own MPI
</span><br>
<span class="quotelev2">&gt; &gt; calls, you might want to look at pbdR/pbdMPI, if you haven't already.
</span><br>
<span class="quotelev2">&gt; &gt; They also have a pbdPROF for profiling and which should be able to do
</span><br>
<span class="quotelev2">&gt; &gt; some profiling with MPI.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://rbigdata.github.io/packages.html">http://rbigdata.github.io/packages.html</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I wasn't sure whether this was really on topic for the list, so I send
</span><br>
<span class="quotelev2">&gt; &gt; it privately.  Sorry for the extra noise if you've already eliminated
</span><br>
<span class="quotelev2">&gt; &gt; pdbR as a possibility.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- bennet
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sat, Mar 22, 2014 at 3:46 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have a bunch of simulators communicating results to a single
</span><br>
<span class="quotelev3">&gt; &gt;&gt; assembler.  The results seem to take a long time to be received, and the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; delay increases as the system runs.  Here are some results:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  sent   received delay
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 70.679  94.776 24.097
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 94.677 144.906 50.229
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 122.082 238.713 116.631
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 144.785 313.101 168.316
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 167.918 350.037 182.119
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 190.709 384.342 193.633
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Times are wall clock times in seconds since process launch, and so there
</span><br>
<span class="quotelev3">&gt; &gt;&gt; may be some slew between sender and receiver, but it will be consistent
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (this tracks only sends from one simulator and also ignores later sends
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that never arrived--my completion logic needs work).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The results are typically 500kB.  Sending is via Isend (non-blocking)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and receiving via Recv (blocking).  The simulators spend most of their
</span><br>
<span class="quotelev3">&gt; &gt;&gt; time computing; in particular there may be significant delays, e.g.,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; from 10 seconds to a minute, between calls to mpi (typically a mix of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Isend, Recv, and Testsome).  All processes are on the same machine (for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; now).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The interval between assembler receives (from all sources) is sometimes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; quite brief, under 2 seconds, and the time between receives is quite
</span><br>
<span class="quotelev3">&gt; &gt;&gt; variable.  Neither is consistent with the theory that the receiver is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; saturated receiving messages, each of which takes a long time to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; transmit (I mean the active part of the transmission, when bits are
</span><br>
<span class="quotelev3">&gt; &gt;&gt; flowing).  I infer from this that actually transmitting the message does
</span><br>
<span class="quotelev3">&gt; &gt;&gt; not take long, and that the longer gaps between receives have some other
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cause.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is all from R, and the problem might lie with higher level code.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can anyone explain what is going on, and what I might do to alleviate
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My speculation is that the necessary handshaking can only take place
</span><br>
<span class="quotelev3">&gt; &gt;&gt; while both processes have called MPI, or perhaps some particular calls
</span><br>
<span class="quotelev3">&gt; &gt;&gt; are required.  The assembler spends most of its time executing a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; receive, but the simulators are mostly busy with other stuff.  And so I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; suspect the delay is with the simulators, though I'm not sure what to do
</span><br>
<span class="quotelev3">&gt; &gt;&gt; about it.  I could wait on completion from the sender, but that kind of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; defeats the purpose of doing an isend.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In a related thread about a similar issue, Jeff Squyres wrote
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (<a href="http://www.open-mpi.org/community/lists/users/2011/07/16928.php">http://www.open-mpi.org/community/lists/users/2011/07/16928.php</a>)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If so, it's because Open MPI does not do background progress on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; non-blocking sends in all cases.  Specifically, if you're sending over
</span><br>
<span class="quotelev3">&gt; &gt;&gt; TCP and the message is &quot;long&quot;, the OMPI layer in the master doesn't
</span><br>
<span class="quotelev3">&gt; &gt;&gt; actually send the whole message immediately because it doesn't want to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; unexpectedly consume a lot of resources in the slave.  So the master
</span><br>
<span class="quotelev3">&gt; &gt;&gt; only sends a small fragment of the message and the communicator,tag
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tuple suitable for matching at the receiver. When the receiver posts a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; corresponding MPI_Recv (time=C), it sends back an ACK to the master,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; enabling the master to send the rest of the message.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, since OMPI doesn't support background progress in all
</span><br>
<span class="quotelev3">&gt; &gt;&gt; situations, the master doesn't see this ACK until it goes into the MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; progression engine -- i.e., when you call MPI_Recv() at Time=E.  Then
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the OMPI layer in the master sees the ACK and sends the rest of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; message.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm not sending over tcp (yet) but maybe I'm running into something
</span><br>
<span class="quotelev3">&gt; &gt;&gt; similar.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I had thought the MPI stuff was handled in separate layer or thread that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; would magically do all the work of moving messages around; the fact that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; top shows all the CPU going to the R processes suggests that's not the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; case.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Running OMPI 1.7.4.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for any help.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ross Boylan
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23951.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Previous message:</strong> <a href="23949.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>In reply to:</strong> <a href="23944.php">Ralph Castain: "Re: [OMPI users] delays in Isend"</a>
<!-- nextthread="start" -->
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

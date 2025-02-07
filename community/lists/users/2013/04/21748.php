<?
$subject_val = "Re: [OMPI users] MPI based HLA/RTI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 17 12:45:12 2013" -->
<!-- isoreceived="20130417164512" -->
<!-- sent="Wed, 17 Apr 2013 09:45:05 -0700" -->
<!-- isosent="20130417164505" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI based HLA/RTI ?" -->
<!-- id="B05C873A-52BF-4322-82DE-A815A5E8C010_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="08EF3FBE-B565-465F-8CB7-17F00F41EB2A_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI based HLA/RTI ?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-17 12:45:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21749.php">Timothy Dwight Dunn: "[OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="21747.php">George Bosilca: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<li><strong>In reply to:</strong> <a href="21747.php">George Bosilca: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21754.php">John Chludzinski: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<li><strong>Reply:</strong> <a href="21754.php">John Chludzinski: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the clarification - very interesting indeed! I'll look at it more closely.
<br>
<p><p>On Apr 17, 2013, at 9:20 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 16, 2013, at 15:51 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just curious: I thought ULFM dealt with recovering an MPI job where one or more processes fail. Is this correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It depends what is the definition of &quot;recovering&quot; you take. ULFM is about leaving the processes that remains (after a fault or a disconnect) in a state that allow them to continue to make progress. It is not about recovering processes, or user data, but it does provide the minimalistic set of functionalities to allow application to do this, if needed (revoke, agreement and shrink).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HLA/RTI consists of processes that start at random times, run to completion, and then exit normally. While a failure could occur, most process terminations are normal and there is no need/intent to revive them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I said above, there is no revival of processes in ULFM, and it was never our intent to have such feature. The dynamic world is to be constructed using MPI-2 constructs (MPI_Spawn or MPI_Connect/Accept or even MPI_Join).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So it's mostly a case of massively exercising MPI's dynamic connect/accept/disconnect functions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do ULFM's structures have some utility for that purpose?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Absolutely. If the process that leaves instead of calling MPI_Finalize calls exit() this will be interpreted by the version of the runtime in ULFM as an event triggering a report. All the ensuing mechanisms are then activated and the application can react to this event with the most meaningful approach it can envision.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 16, 2013, at 3:20 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is an ongoing effort to address the potential volatility of processes in MPI called ULFM. There is a working version available at <a href="http://fault-tolerance.org">http://fault-tolerance.org</a>. It supports TCP, sm and IB (mostly). You will find some examples, and the document explaining the additional constructs needed in MPI to achieve this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 15, 2013, at 17:29 , John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That would seem to preclude its use for an RTI.  Unless you have a card up your sleeve?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---John
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Apr 15, 2013 at 11:23 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It isn't the fact that there are multiple programs being used - we support that just fine. The problem with HLA/RTI is that it allows programs to come/go at will - i.e., not every program has to start at the same time, nor complete at the same time. MPI requires that all programs be executing at the beginning, and that all call finalize prior to anyone exiting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 15, 2013, at 8:14 AM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I just received an e-mail notifying me that MPI-2 supports MPMD.  This would seen to be just what the doctor ordered?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---John
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mon, Apr 15, 2013 at 11:10 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FWIW: some of us are working on a variant of MPI that would indeed support what you describe - it would support send/recv (i.e., MPI-1), but not collectives, and so would allow communication between arbitrary programs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Not specifically targeting HLA/RTI, though I suppose a wrapper that conformed to that standard could be created.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 15, 2013, at 7:50 AM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; This would be a departure from the SPMD paradigm that seems central to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; MPI's design. Each process would be a completely different program
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; (piece of code) and I'm not sure how well that would working using
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; MPI?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; BTW, MPI is commonly used in the parallel discrete even world for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; communication between LPs (federates in HLA). But these LPs are
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; usually the same program.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; ---John
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; On Mon, Apr 15, 2013 at 10:22 AM, John Chludzinski
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; &lt;john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; Is anyone aware of an MPI based HLA/RTI (DoD High Level Architecture
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; (HLA) / Runtime Infrastructure)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; ---John
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21748/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21749.php">Timothy Dwight Dunn: "[OMPI users] OMPI v1.7.1 fails to build on RHEL 5 and RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="21747.php">George Bosilca: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<li><strong>In reply to:</strong> <a href="21747.php">George Bosilca: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21754.php">John Chludzinski: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<li><strong>Reply:</strong> <a href="21754.php">John Chludzinski: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
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

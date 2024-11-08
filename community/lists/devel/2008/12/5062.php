<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 13 15:11:13 2008" -->
<!-- isoreceived="20081213201113" -->
<!-- sent="Sat, 13 Dec 2008 13:11:08 -0700" -->
<!-- isosent="20081213201108" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes" -->
<!-- id="E60CE096-C2F6-4628-AA20-C1E00AD69EF4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D6520864-86FE-44B1-B1CB-69A55BC78118_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-13 15:11:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5063.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5063.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="5063.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I really won't have time to look until after Christmas.  I'll  
<br>
put it on the to-do list, but that's as soon as it has a prayer of  
<br>
reaching the top.
<br>
<p>Brian
<br>
<p>On Dec 13, 2008, at 1:02 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found a second problem with rebuilding the datatype on the remote.  
</span><br>
<span class="quotelev1">&gt; Originally, the displacement were wrongly computed. This is now  
</span><br>
<span class="quotelev1">&gt; fixed. However, the data at the end of the fence is still not  
</span><br>
<span class="quotelev1">&gt; correct on the remote.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can confirm that the packed message contains only 0 instead of the  
</span><br>
<span class="quotelev1">&gt; real value, but I couldn't figure out how these 0 got there. The  
</span><br>
<span class="quotelev1">&gt; pack function works correctly for the MPI_Send function, I don't see  
</span><br>
<span class="quotelev1">&gt; any reason not to do the same for the MPI_Put. As you're the one- 
</span><br>
<span class="quotelev1">&gt; sided guy in ompi, can you take a look at the MPI_Put to see why the  
</span><br>
<span class="quotelev1">&gt; data is incorrect?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 11, 2008, at 19:14 , Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that's a reasonable solution.  However, the words &quot;not it&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; come to mind.  Sorry, but I have way too much on my plate this  
</span><br>
<span class="quotelev2">&gt;&gt; month.  By the way, in case no one noticed, I had e-mailed my  
</span><br>
<span class="quotelev2">&gt;&gt; findings to devel.  Someone might want to reply to Dorian's e-mail  
</span><br>
<span class="quotelev2">&gt;&gt; on users.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 11, 2008, at 2:31 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You're right, the datatype is being too cautious with the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; boundaries when detecting the overlap. There is no good solution  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to detect the overlap except parsing the whole memory layout to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check the status of every predefined type. As one can imagine this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is a very expensive operation. This is reason I preferred to use  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the true extent and the size of the data to try to detect the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; overlap. This approach is a lot faster, but has a poor accuracy.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The best solution I can think of in short term is to remove  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; completely the overlap check. This will have absolutely no impact  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the way we pack the data, but can lead to unexpected results  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when we unpack and the data overlap. But I guess this can be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; considered as a user error, as the MPI standard clearly state that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the result of such an operation is ... unexpected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 10, 2008, at 22:20 , Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I looked into this, and it appears to be datatype related.  If  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the displacements are set t o 3, 2, 1, 0, there the datatype will  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail the type checks for one-sided because is_overlapped()  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; returns 1 for the datatype.  My reading of the standard seems to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; indicate this should not be.  I haven't looked into the problems  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with displacement set to 0, 1, 2, 3, but I'm guessing it has  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something to do with the reverse problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This looks like a datatype issue, so it's out of my realm of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expertise.  Can someone else take a look?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: doriankrause &lt;doriankrause_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: December 10, 2008 4:07:55 PM MST
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: [OMPI users] Onesided + derived datatypes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi List,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a MPI program which uses one sided communication with  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; derived
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; datatypes (MPI_Type_create_indexed_block). I developed the code  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPICH2 and unfortunately didn't thought about trying it out with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OpenMPI. Now that I'm &quot;porting&quot; the Application to OpenMPI I'm  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; facing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some problems. On the most machines I get an SIGSEGV in  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Win_fence,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sometimes an invalid datatype shows up. I ran the program in  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Valgrind
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and didn't get anything valuable. Since I can't see a reason for  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem (at least if I understand the standard correctly), I  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; attached testprogram.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here are my experiences:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * If I compile without ONESIDED defined, everything works and V1  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and V2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; give the same results
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * If I compile with ONESIDED and V2 defined  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (MPI_Type_contiguous) it works.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * ONESIDED + V1 + O2: No errors but obviously nothing is send?  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (Am I in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; assuming that V1+O2 and V2 should be equivalent?)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * ONESIDED + V1 + O1:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [m02:03115] *** An error occurred in MPI_Put
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [m02:03115] *** on win
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [m02:03115] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [m02:03115] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I didn't get a segfault as in the &quot;real life example&quot; but if  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompitest.cc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is correct it means that OpenMPI is buggy when it comes to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; onesided
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communication and (some) derived datatypes, so that it is  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; probably not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of problem in my code.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm using OpenMPI-1.2.8 with the newest gcc 4.3.2 but the same  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; behaviour
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can be be seen with gcc-3.3.1 and intel 10.1.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please correct me if ompitest.cc contains errors. Otherwise I  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; glad to hear how I should report these problems to the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; develepors (if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; they don't read this).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks + best regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dorian
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;ompitest.tar.gz&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5063.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5063.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="5063.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
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

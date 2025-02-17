<?
$subject_val = "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 10 17:50:28 2010" -->
<!-- isoreceived="20100610215028" -->
<!-- sent="Thu, 10 Jun 2010 17:49:58 -0400" -->
<!-- isosent="20100610214958" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..." -->
<!-- id="5E9838FE224683419F586D9DF46A0E258E50D3E8EF_at_MBOX.FLAS.CSI.CUNY.EDU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FB4B946C-5981-4804-9DA0-C933B8C637DE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Address not mapped segmentation fault with1.4.2	...<br>
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-10 17:49:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13305.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>Previous message:</strong> <a href="13303.php">Terry Dontje: "Re: [OMPI users] Specifying slots in rankfile"</a>
<li><strong>In reply to:</strong> <a href="13300.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13305.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>Reply:</strong> <a href="13305.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff/All,
<br>
<p>OK ... so if I follow your lead and build a version without PBS --tm= integration
<br>
and it works, I should be able to report this as an incompatibility bug between
<br>
the latest version of PBS Pro (10.2.0.93147) and the latest version of OpenMPI
<br>
(1.4.2). right?  Do I report that you to my friends at OpenMPI or my friends at
<br>
PBS Pro (Altair), or both?
<br>
<p>Thanks for your help.  I will let you know what the result is ...
<br>
<p>rbw
<br>
<p><p>&nbsp;&nbsp;&nbsp;Richard Walsh
<br>
&nbsp;&nbsp;&nbsp;Parallel Applications and Systems Manager
<br>
&nbsp;&nbsp;&nbsp;CUNY HPC Center, Staten Island, NY
<br>
&nbsp;&nbsp;&nbsp;718-982-3319
<br>
&nbsp;&nbsp;&nbsp;612-382-4620
<br>
<p>&nbsp;&nbsp;&nbsp;Mighty the Wizard
<br>
&nbsp;&nbsp;&nbsp;Who found me at sunrise
<br>
&nbsp;&nbsp;&nbsp;Sleeping, and woke me
<br>
&nbsp;&nbsp;&nbsp;And learn'd me Magic!
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Jeff Squyres [jsquyres_at_[hidden]]
<br>
Sent: Thursday, June 10, 2010 11:52 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Address not mapped segmentation fault with1.4.2       ...
<br>
<p>Not offhand, but just to close the loop on a question from your first mail: this should not be a memory manager issue (i.e., not related to IB).
<br>
<p>As Ralph noted, this is a segv in the launcher (mpirun, in this case) -- in the tm_init() function call (TM is the launcher helper library in PBS/Torque).  Open MPI (mpirun, in this case) calls tm_init() to setup the PBS launcher -- it's the first PBS-specific function call that we make.  If tm_init() fails, it may indicate that something fairly basic is busted in that support library.
<br>
<p><p>On Jun 10, 2010, at 11:12 AM, Richard Walsh wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph/Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, the change was intentional.  I have upgraded PBS as well and built
</span><br>
<span class="quotelev1">&gt; 1.4.2 pointing to the new PBS via a symbolic link to 'default' which allows one
</span><br>
<span class="quotelev1">&gt; to control the actual default without changing the path.  I did the same thing
</span><br>
<span class="quotelev1">&gt; on the non-IB system which seems to be working fine with 1.4.2.  This would
</span><br>
<span class="quotelev1">&gt; suggest that this is not the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is possible that the PBS build in the IB system was flawed, but it looked
</span><br>
<span class="quotelev1">&gt; normal.  I could rebuild it.  The PBS libraries (as well as MPI) are in a shared
</span><br>
<span class="quotelev1">&gt; location that is NFS mounted on the compute nodes so things should be in
</span><br>
<span class="quotelev1">&gt; sync, but I will verify this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any other suggestions ... ??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rbw
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Richard Walsh
</span><br>
<span class="quotelev1">&gt;    Parallel Applications and Systems Manager
</span><br>
<span class="quotelev1">&gt;    CUNY HPC Center, Staten Island, NY
</span><br>
<span class="quotelev1">&gt;    718-982-3319
</span><br>
<span class="quotelev1">&gt;    612-382-4620
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Mighty the Wizard
</span><br>
<span class="quotelev1">&gt;    Who found me at sunrise
</span><br>
<span class="quotelev1">&gt;    Sleeping, and woke me
</span><br>
<span class="quotelev1">&gt;    And learn'd me Magic!
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Jeff Squyres [jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 10, 2010 11:00 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Address not mapped segmentation fault with 1.4.2      ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 10, 2010, at 10:57 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; That error would indicate something wrong with the pbs connection - it is tm_init that is crashing. I note that you did --with-tm pointing to a different location - was that intentional? Could be something wrong with that pbs build
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...and make sure that the support libs for TM/PBS are the same between the node you're building on and all the nodes where OMPI will be running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Think green before you print this email.
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
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Think green before you print this email.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13305.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>Previous message:</strong> <a href="13303.php">Terry Dontje: "Re: [OMPI users] Specifying slots in rankfile"</a>
<li><strong>In reply to:</strong> <a href="13300.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13305.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>Reply:</strong> <a href="13305.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
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

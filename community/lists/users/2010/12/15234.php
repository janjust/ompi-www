<?
$subject_val = "Re: [OMPI users] Using MPI_Put/Get correctly?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 29 13:41:53 2010" -->
<!-- isoreceived="20101229184153" -->
<!-- sent="Wed, 29 Dec 2010 13:41:45 -0500" -->
<!-- isosent="20101229184145" -->
<!-- name="Grismer, Matthew J Civ USAF AFMC AFRL/RBAT" -->
<!-- email="Matthew.Grismer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using MPI_Put/Get correctly?" -->
<!-- id="2B00361EE3107A4F88383EC1B041DC9A07DF461F_at_VFOHMLAO01.Enterprise.afmc.ds.af.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2B00361EE3107A4F88383EC1B041DC9A07DF404F_at_VFOHMLAO01.Enterprise.afmc.ds.af.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using MPI_Put/Get correctly?<br>
<strong>From:</strong> Grismer, Matthew J Civ USAF AFMC AFRL/RBAT (<em>Matthew.Grismer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-29 13:41:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15235.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Previous message:</strong> <a href="15233.php">Ralph Castain: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>In reply to:</strong> <a href="15227.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15253.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15253.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Someone correctly pointed out the bug in my examples.  In the MPI_Put I
<br>
pass a 0 as the displacement, however, the argument must be of type
<br>
integer (kind=MPI_ADDRESS_KIND), which is NOT the default integer type.
<br>
Replacing the 0 with the correct integer type fixes both examples.  Now
<br>
to see if it fixes the actual code I am having difficulty with...
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Grismer,Matthew J Civ USAF AFMC AFRL/RBAT
<br>
Sent: Monday, December 27, 2010 5:33 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Using MPI_Put/Get correctly?
<br>
<p>I decided to try and isolate the issue, and created two example test
<br>
programs
<br>
that appear to highlight an issue
<br>
with Open MPI; both die when I run them on 2 processors.  I am pretty
<br>
certain
<br>
the first (putoneway.f90) should work, as I am only doing a single put
<br>
from
<br>
one processor to a second processor; the target processor is doing
<br>
nothing
<br>
with the window'ed array that is receiving the data. My guess is the
<br>
problem
<br>
lies in the indexed datatypes that I am using for both the origin and
<br>
target.
<br>
<p>The second case (putbothways.f90) closely mirrors what I am actually
<br>
trying
<br>
to do in my code, that is have each processor put into the other
<br>
processors
<br>
window'ed array at the same time.  So, each process is sending from and
<br>
receiving into the same array at the same time, with no overlap in the
<br>
sent
<br>
and received data.  Once again I'm using indexed data types for both the
<br>
origin and target.
<br>
<p>To build:  mpif90 putoneway.f90
<br>
To run:  mpiexec -np 2 a.out
<br>
<p>Matt
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of James Dinan
<br>
Sent: Thursday, December 16, 2010 10:09 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Using MPI_Put/Get correctly?
<br>
<p>On 12/16/2010 08:34 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Additionally, since MPI-3 is updating the semantics of the one-sided
</span><br>
<span class="quotelev1">&gt; stuff, it might be worth waiting for all those clarifications before
</span><br>
<span class="quotelev1">&gt; venturing into the MPI one-sided realm.  One-sided semantics are much
</span><br>
<span class="quotelev1">&gt; more subtle and complex than two-sided semantics.
</span><br>
<p>Hi Jeff,
<br>
<p>I don't think we should give users the hope that MPI-3 RMA will be out
<br>
tomorrow.  The RMA revisions are still in proposal form and need work.
<br>
Realistically speaking, we might be able to get this accepted into the
<br>
standard within a year and it will be another year before
<br>
implementations catch up.  If users need one-sided now, they should use
<br>
the MPI-2 one-sided API.
<br>
<p>MPI-3 RMA extends MPI-2 RMA and will be backward compatible, so anything
<br>
you write now will still work.  It's still unclear to me whether MPI-3's
<br>
RMA semantics will be the leap forward in usability we have hoped for.
<br>
We are trying to make it more flexible, but there will likely still be
<br>
tricky parts due to portability and performance concerns.
<br>
<p>So, my advice: don't be scared of MPI-2.  I agree, it's complicated, but
<br>
once you get acclimated it's not that bad.  Really.  :)
<br>
<p>Best,
<br>
&nbsp;~Jim.
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15235.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Previous message:</strong> <a href="15233.php">Ralph Castain: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>In reply to:</strong> <a href="15227.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15253.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15253.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
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

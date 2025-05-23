<?
$subject_val = "Re: [OMPI users] Parallel file write in fortran (+mpi)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 18:59:18 2010" -->
<!-- isoreceived="20100202235918" -->
<!-- sent="Wed, 03 Feb 2010 10:59:10 +1100" -->
<!-- isosent="20100202235910" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel file write in fortran (+mpi)" -->
<!-- id="4B68BC4E.4020207_at_anu.edu.au" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="15951_1265154093_4B68B82C_15951_38735_1_876512661002021540s50219adtb78362fd045aef15_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Parallel file write in fortran (+mpi)<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-02 18:59:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11981.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Previous message:</strong> <a href="11979.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Maybe in reply to:</strong> <a href="11962.php">Laurence Marks: "[OMPI users] Parallel file write in fortran (+mpi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11981.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Reply:</strong> <a href="11981.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
But its a very bad idea on a &quot;coherent&quot;, &quot;POSIX&quot; filesystem like Lustre.
<br>
Locks have to bounce around between the nodes for every write.  This can
<br>
be VERY slow (even for trivial amounts of &quot;logging&quot; IO) and thrash the
<br>
filesystem for other users.   So, yes, at our site, we include this sort
<br>
of &quot;parallel IO&quot; on our list of disallowed behaviour.  Not a good practice
<br>
to adopt in general.
<br>
<p>David
<br>
<p>On 02/03/2010 10:40 AM, Laurence Marks wrote:
<br>
<span class="quotelev1">&gt; I know it's wrong, but I don't think it is forbidden.... (which I
</span><br>
<span class="quotelev1">&gt; guess is what you are saying).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 2, 2010 at 5:31 PM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; +1 on Nick's responses.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; AFAIK, if you don't mind getting garbage in the output file, it should be fine to do.  Specifically: it should not cause OS issues (crash, reboot, corrupted filesystem, etc.) to do this -- but the file contents will likely be garbage.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That being said, this situation likely falls into the &quot;Doc, it hurts when I do this...&quot; category.  Meaning: you know it's wrong, so you probably shouldn't be doing it anyway.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 2, 2010, at 4:50 PM, Nicolas Bock wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Laurence,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know whether it's as bad as a deadly sin, but for us parallel writes are a huge problem and we get complete garbage in the file. Take a look at:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Implementing MPI-IO Atomic Mode and Shared File Pointers Using MPI One-Sided Communication, Robert Latham,Robert Ross, Rajeev Thakur, International Journal of High Performance Computing Applications, 21, 132 (2007).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; They describe an implemenation of a &quot;mutex&quot; like object in MPI. If you protect writes to the file with an exclusive lock you can serialize the writes and make use of NFS's close to open cache coherence.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nick
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Feb 2, 2010 at 08:27, Laurence Marks&lt;L-marks_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a question concerning having many processors in a mpi job all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; write to the same file -- not using mpi calls but with standard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fortran I/O. I know that this can lead to consistency issues, but it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can also lead to OS issues with some flavors of nfs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At least in fortran, there is nothing &quot;wrong&quot; with doing this. My
</span><br>
<span class="quotelev3">&gt;&gt;&gt; question is whether this is &quot;One of the Seven Deadly Sins&quot; of mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programming, or just frowned on. (That is, it should be OK even if it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leads to nonsense files, and not lead to OS issues.) If it is a sin, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would appreciate a link to where this is spelt out in some &quot;official&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; document or similar.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Laurence Marks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Northwestern University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Electron crystallography is the branch of science that uses electron
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scattering and imaging to study the structure of matter.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11981.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Previous message:</strong> <a href="11979.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Maybe in reply to:</strong> <a href="11962.php">Laurence Marks: "[OMPI users] Parallel file write in fortran (+mpi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11981.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Reply:</strong> <a href="11981.php">Laurence Marks: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
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

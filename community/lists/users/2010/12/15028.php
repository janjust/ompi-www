<?
$subject_val = "Re: [OMPI users] Scalability issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  7 11:33:12 2010" -->
<!-- isoreceived="20101207163312" -->
<!-- sent="Tue, 07 Dec 2010 11:33:01 -0500" -->
<!-- isosent="20101207163301" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scalability issue" -->
<!-- id="4CFE61BD.80106_at_ldeo.columbia.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9B26331C-3A82-4377-828E-D8D61C4E128A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Scalability issue<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-07 11:33:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15029.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="15027.php">Grzegorz Maj: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>In reply to:</strong> <a href="15026.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15029.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Reply:</strong> <a href="15029.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>Did I understand you right?
<br>
<p>Are you saying that one can effectively double the counting
<br>
capability (i.e. the &quot;count&quot; parameters in MPI calls) of OpenMPI
<br>
by compiling it with 8-byte integer flags?
<br>
<p>And long as one consistently uses the same flags to compile
<br>
the application, everything would work smoothly?
<br>
<p>As per several previous discussions here in the list,
<br>
I was persuaded to believe that MPI_INT / MPI_INTEGER is written
<br>
in stone to be 4-bytes (perhaps by MPI standard,
<br>
perhaps the configure script, maybe by both),
<br>
and that &quot;counts&quot; in [Open]MPI would also be restricted to that size
<br>
i.e., effectively up to 2147483647, if I counted right.
<br>
I may have inadvertently misled Benjamin, if this perception is wrong.
<br>
I will gladly stand corrected, if this is so.
<br>
<p>You are the OpenMPI user's oracle (oops, sorry Cisco),
<br>
so please speak out.
<br>
<p>Cheers,
<br>
Gus Correa
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; It is always a good idea to have your application's sizeof(INTEGER) 
</span><br>
<span class="quotelev1">&gt; match the MPI's sizeof(INTEGER).  Having them mismatch is a recipe for trouble.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meaning: if you're compiling your app with -make-integer-be-8-bytes, 
</span><br>
<span class="quotelev1">&gt; then you should configure/build Open MPI with that same flag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm thinking that this should *only* affect the back-end behavior 
</span><br>
<span class="quotelev1">&gt; of MPI_INTEGER; the size of address pointers and whatnot should not be 
</span><br>
<span class="quotelev1">&gt; affected (unless -make-integer-be-8-bytes also changes 
</span><br>
<span class="quotelev1">&gt; the sizes of some other types).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 5, 2010, at 9:01 PM, Gustavo Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Benjamin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess you could compile OpenMPI with standard integer and real sizes.
</span><br>
<span class="quotelev2">&gt;&gt; Then compile your application (DRAGON) with the flags to change to 8-byte
</span><br>
<span class="quotelev2">&gt;&gt; integers and 8-byte reals.
</span><br>
<span class="quotelev2">&gt;&gt; We have some programs here that use real8 and are compiled this way,
</span><br>
<span class="quotelev2">&gt;&gt; and run without a problem.
</span><br>
<span class="quotelev2">&gt;&gt; I guess this is what Tim Prince was also telling you in his comments.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can pass those flags to the MPI compiler wrappers (mpif77 etc),
</span><br>
<span class="quotelev2">&gt;&gt; which will relay them to gfortran when you compile DRAGON.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not even sure if those flags would be accepted or ignored by OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; when you build it.
</span><br>
<span class="quotelev2">&gt;&gt; I guess they will be ignored.
</span><br>
<span class="quotelev2">&gt;&gt; You could check this out by looking at the MPI type sizes in your header
</span><br>
<span class="quotelev2">&gt;&gt; files in the include directory and subdirectories.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe an OpenMPI developer could shed some light here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Moreover, if I remember right, 
</span><br>
<span class="quotelev2">&gt;&gt; the MPI address type complies with the machine architecture,
</span><br>
<span class="quotelev2">&gt;&gt; i.e., 32 bits if your machine is 32-bit, 64-bits if the machine is 64-bit, 
</span><br>
<span class="quotelev2">&gt;&gt; and you don't need to force it to be 8-bytes with compilation flags.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately mixing pointers (&quot;Cray pointers&quot;, I suppose) 
</span><br>
<span class="quotelev2">&gt;&gt; with integers is a common source of headaches, if DRAGON does this.
</span><br>
<span class="quotelev2">&gt;&gt; It is yet another possible situation where negative integers could crop in
</span><br>
<span class="quotelev2">&gt;&gt; and lead to segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; At least one ocean circulation model we run here had
</span><br>
<span class="quotelev2">&gt;&gt; many problems because of this mix of integers and (Cray) pointers
</span><br>
<span class="quotelev2">&gt;&gt; spread all across the code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 5, 2010, at 7:17 PM, Benjamin Toueg wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately DRAGON is old FORTRAN77. Integers have been used instead of pointers. If I compile it in 64bits without -f-default-integer-8, the so-called pointers will remain in 32bits. Problems could also arise from its data structure handlers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Therefore -f-default-integer-8 is absolutely necessary.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Futhermore MPI_SEND and MPI_RECEIVE are called a dozen times in only one source file (used for passing a data structure from one node to another) and it has proved to be working in every situtation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not knowing which line is causing my segfault is annoying. &lt;323.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Benjamin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2010/12/6 Gustavo Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Benjamin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would just rebuild OpenMPI withOUT the compiler flags that change the standard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sizes of  &quot;int&quot; and &quot;float&quot; (do a &quot;make cleandist&quot; first!), then recompile your program,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and see how it goes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't think you are gaining anything by trying to change the standard &quot;int/integer&quot; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;real/float&quot; sizdes, and most likely they are inviting trouble, making things more confusing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Worst scenario, you will at least be sure that the bug is somewhere else, not on the mismatch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of basic type sizes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you need to pass 8-byte real buffers, use MPI_DOUBLE_PRECISION, or MPI_REAL8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in your (Fortran) MPI calls, and declare them in the Fortran code accordingly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (double precision or real(kind=8)).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I remember right, there is no  8-byte integer support in the Fortran MPI bindings,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only in the C bindings, but some OpenMPI expert could clarify this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hence, if you are passing 8-byte integers in your MPI calls this may be also problematic.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My two cents,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 5, 2010, at 3:04 PM, Benjamin Toueg wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; First of all thanks for your insight !
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you get a corefile?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't get a core file, but I get a file called _FIL001. It doesn't contain any debugging symbols. It's most likely a digested version of the input file given to the executable : ./myexec &lt; inputfile.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there's no line numbers printed in the stack trace
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would love to see those, but even if I compile openmpi with -debug -mem-debug -mem-profile, they don't show up. I recompiled my sources to be sure to properly link them to the newly debugged version of openmpi. I assumed I didn't need to compile my own sources with -g option since it crashes in openmpi itself ? I didn't try to run mpiexec via gdb either, I guess it wont help since I already get the trace.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the -fdefault-integer-8 options ought to be highly dangerous
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for noting. Indeed I had some issues with this option. For instance I have to declare some arguments as INTEGER*4 like RANK,SIZE,IERR in :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CALL MPI_COMM_RANK(MPI_COMM_WORLD,RANK,IERR)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CALL MPI_COMM_SIZE(MPI_COMM_WORLD,SIZE,IERR)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In your example &quot;call MPI_Send(buf, count, MPI_INTEGER, dest, tag, MPI_COMM_WORLD, mpierr)&quot; I checked that count is never bigger than 2000 (as you mentioned it could flip to the negative). However I haven't declared it as INTEGER*4 and I think I should.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I said &quot;I had to raise the number of data strucutures to be sent&quot;, I meant that I had to call MPI_SEND many more times, not that buffers were bigger than before.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'll get back to you with more info when I'll be able to fix my connexion problem to the cluster...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Benjamin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2010/12/3 Martin Siegert &lt;siegert_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just to expand on this guess ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Dec 02, 2010 at 05:40:53PM -0500, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi All
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I wonder if configuring OpenMPI while
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; forcing the default types to non-default values
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (-fdefault-integer-8 -fdefault-real-8) might have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something to do with the segmentation fault.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Would this be effective, i.e., actually make the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the sizes of MPI_INTEGER/MPI_INT and MPI_REAL/MPI_FLOAT bigger,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or just elusive?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe what happens is that this mostly affects the fortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrapper routines and the way Fortran variables are mapped to C:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_INTEGER -&gt; MPI_LONG
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_FLOAT   -&gt; MPI_DOUBLE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_DOUBLE_PRECISION -&gt; MPI_DOUBLE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In that respect I believe that the -fdefault-real-8 option is harmless,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i.e., it does the expected thing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But the -fdefault-integer-8 options ought to be highly dangerous:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It works for integer variables that are used as &quot;buffer&quot; arguments
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in MPI statements, but I would assume that this does not work for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;count&quot; and similar arguments.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Example:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; integer, allocatable :: buf(*,*)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; integer i, count, dest, tag, mpierr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i = 32768
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i2 = 2*i
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocate(buf(i,i2))
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; count = i*i2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; buf = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; call MPI_Send(buf, count, MPI_INTEGER, dest, tag, MPI_COMM_WORLD, mpierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now count is 2^31 which overflows a 32bit integer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The MPI standard requires that count is a 32bit integer, correct?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thus while buf gets the type MPI_LONG, count remains an int.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this interpretation correct? If it is, then you are calling
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Send with a count argument of -2147483648.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Which could result in a segmentation fault.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Martin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Martin Siegert
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Head, Research Computing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WestGrid/ComputeCanada Site Lead
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IT Services                                phone: 778 782-4691
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Simon Fraser University                    fax:   778 782-4242
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Burnaby, British Columbia                  email: siegert_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Canada  V5A 1S6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There were some recent discussions here about MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; limiting counts to MPI_INTEGER.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Since Benjamin said he &quot;had to raise the number of data structures&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; which eventually led to the the error,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I wonder if he is inadvertently flipping to negative integer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; side of the 32-bit universe (i.e. &gt;= 2**31), as was reported here by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; other list subscribers a few times.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Anyway, segmentation fault can come from many different places,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this is just a guess.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Do you get a corefile?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It looks like you're calling MPI_RECV in Fortran and then it segv's.  This is *likely* because you're either passing a bad parameter or your buffer isn't big enough.  Can you double check all your parameters?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately, there's no line numbers printed in the stack trace, so it's not possible to tell exactly where in the ob1 PML it's dying (i.e., so we can't see exactly what it's doing to cause the segv).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Dec 2, 2010, at 9:36 AM, Benjamin Toueg wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am using DRAGON, a neutronic simulation code in FORTRAN77 that has its own datastructures. I added a module to send these data structures thanks to MPI_SEND / MPI_RECEIVE, and everything worked perfectly for a while.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Then I had to raise the number of data structures to be sent up to a point where my cluster has this bug :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Failing at address: 0x2c2579fc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [ 0] /lib/libpthread.so.0 [0x7f52d2930410]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [ 1] /home/toueg/openmpi/lib/openmpi/mca_pml_ob1.so [0x7f52d153fe03]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [ 2] /home/toueg/openmpi/lib/libmpi.so.0(PMPI_Recv+0x2d2) [0x7f52d3504a1e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [ 3] /home/toueg/openmpi/lib/libmpi_f77.so.0(pmpi_recv_+0x10e) [0x7f52d36cf9c6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; How can I make this error more explicit ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I use the following configuration of openmpi-1.4.3 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./configure --enable-debug --prefix=/home/toueg/openmpi CXX=g++ CC=gcc F77=gfortran FC=gfortran FLAGS=&quot;-m64 -fdefault-integer-8 -fdefault-real-8 -fdefault-double-8&quot; FCFLAGS=&quot;-m64 -fdefault-integer-8 -fdefault-real-8 -fdefault-double-8&quot; --disable-mpi-f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is the output of mpif77 -v :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpif77 for 1.2.7 (release) of : 2005/11/04 11:54:51
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Driving: f77 -L/usr/lib/mpich-mpd/lib -v -lmpich-p4mpd -lpthread -lrt -lfrtbegin -lg2c -lm -shared-libgcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Lecture des sp&#195;&#169;cification &#195;&#160; partir de /usr/lib/gcc/x86_64-linux-gnu/3.4.6/specs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Configur&#195;&#169; avec: ../src/configure -v --enable-languages=c,c++,f77,pascal --prefix=/usr --libexecdir=/usr/lib --with-gxx-include-dir=/usr/include/c++/3.4 --enable-shared --with-system-zlib --enable-nls --without-included-gettext --program-suffix=-3.4 --enable-__cxa_atexit --enable-clocale=gnu --enable-libstdcxx-debug x86_64-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mod&#195;&#168;le de thread: posix
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; version gcc 3.4.6 (Debian 3.4.6-5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib/gcc/x86_64-linux-gnu/3.4.6/collect2 --eh-frame-hdr -m elf_x86_64 -dynamic-linker /lib64/ld-linux-x86-64.so.2 /usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/crt1.o /usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/crti.o /usr/lib/gcc/x86_64-linux-gnu/3.4.6/crtbegin.o -L/usr/lib/mpich-mpd/lib -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6 -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6 -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../.. -L/lib/../lib -L/usr/lib/../lib -lmpich-p4mpd -lpthread -lrt -lfrtbegin -lg2c -lm -lgcc_s -lgcc -lc -lgcc_s -lgcc /usr/lib/gcc/x86_64-linux-gnu/3.4.6/crtend.o /usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/crtn.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/libfrtbegin.a(frtbegin.o): dans la fonction &#226;&#150;&#146; main &#226;&#150;&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (.text+0x1e): r&#195;&#169;f&#195;&#169;rence ind&#195;&#169;finie vers &#226;&#150;&#146; MAIN__ &#226;&#150;&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; collect2: ld a retourn&#195;&#169; 1 code d'&#195;&#169;tat d'ex&#195;&#169;cution
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Benjamin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15029.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="15027.php">Grzegorz Maj: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>In reply to:</strong> <a href="15026.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15029.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Reply:</strong> <a href="15029.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
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

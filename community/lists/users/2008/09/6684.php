<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 20:36:52 2008" -->
<!-- isoreceived="20080923003652" -->
<!-- sent="Mon, 22 Sep 2008 18:36:48 -0600" -->
<!-- isosent="20080923003648" -->
<!-- name="Brian Harker" -->
<!-- email="brian.harker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="48535380809221736m4c46c5cdx8a863ef31895f040_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A41AF3AA-0D5C-4FB8-9755-B46509687596_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure and Build ok, but mpi module not recognized?<br>
<strong>From:</strong> Brian Harker (<em>brian.harker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 20:36:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6685.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6683.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6683.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6685.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6685.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6686.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nope, no user-defined types or arrays greater than 2 dimensions.
<br>
<p>On Mon, Sep 22, 2008 at 6:24 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Sep 22, 2008, at 6:48 PM, Brian Harker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when I compile my production code, I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; fortcom: Error: driver.f90: line 211: There is no matching specific
</span><br>
<span class="quotelev2">&gt;&gt; subroutine for this generic subroutine call.   [MPI_SEND]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Seems odd that it would spit up on MPI_SEND, but has no problem with
</span><br>
<span class="quotelev2">&gt;&gt; MPI_RECV...  What do you guys think?  And thanks again for your help
</span><br>
<span class="quotelev2">&gt;&gt; and patience?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The F90 MPI bindings have some well-known design flaws (i.e., problems with
</span><br>
<span class="quotelev1">&gt; the standard itself, not any particular implementation).  Many of them
</span><br>
<span class="quotelev1">&gt; center around the fact that F90 is a strongly-typed language.  See this
</span><br>
<span class="quotelev1">&gt; paper for some details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/papers/euro-pvmmpi-2005-fortran/">http://www.open-mpi.org/papers/euro-pvmmpi-2005-fortran/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the highlights, as they pertain to writing F90 MPI apps:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - There is no equivalent to C's (void*).  This means that the F90 MPI
</span><br>
<span class="quotelev1">&gt; bindings cannot accept user-defined datatypes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - This also means that *every* pre-defined type must have a F90 MPI binding.
</span><br>
<span class="quotelev1">&gt;  There are approximately 15 intrinsic size/type combinations.  There are 50
</span><br>
<span class="quotelev1">&gt; MPI functions that take one choice buffer (e.g., MPI_SEND, etc.), and 25
</span><br>
<span class="quotelev1">&gt; functions that take two choice buffers (e.g., MPI_REDUCE).  I'm copying this
</span><br>
<span class="quotelev1">&gt; math from the paper, and I think we got it slightly wrong (there was a
</span><br>
<span class="quotelev1">&gt; discussion about it on this list a while ago), but it results in many
</span><br>
<span class="quotelev1">&gt; *millions* of F90 MPI bindings functions.  There's no compiler on the planet
</span><br>
<span class="quotelev1">&gt; than can handle all of these in a single F90 module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI compensates for this with the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - F90 bindings are not created for any of the 2-choice-buffer functions
</span><br>
<span class="quotelev1">&gt; - F90 bindings are created for all the 1-choice-buffer functions, but only
</span><br>
<span class="quotelev1">&gt; for dimensions up to N dimensions (N defaults to 4, IIRC).  You can change
</span><br>
<span class="quotelev1">&gt; the value of N with OMPI's configure script; use the
</span><br>
<span class="quotelev1">&gt; --with-f90-max-array-dim.  The maximum value of N is 7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So -- your app failed to compile because you either used a user-defined
</span><br>
<span class="quotelev1">&gt; datatype or you used an array with a dimension greater than 4.  If it was a
</span><br>
<span class="quotelev1">&gt; greater-dimension issue, you can reconfigure/recompile/reinstall OMPI
</span><br>
<span class="quotelev1">&gt; (again, sorry) with a larger N value.  If it was a user-defined datatype,
</span><br>
<span class="quotelev1">&gt; you unfortunately have to &quot;include mpif.h&quot; in that
</span><br>
<span class="quotelev1">&gt; subroutine/function/whatever, sorry (and you lose the type checking).  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's some info from OMPI's README:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; - The Fortran 90 MPI bindings can now be built in one of three sizes
</span><br>
<span class="quotelev1">&gt;  using --with-mpi-f90-size=SIZE (see description below).  These sizes
</span><br>
<span class="quotelev1">&gt;  reflect the number of MPI functions included in the &quot;mpi&quot; Fortran 90
</span><br>
<span class="quotelev1">&gt;  module and therefore which functions will be subject to strict type
</span><br>
<span class="quotelev1">&gt;  checking.  All functions not included in the Fortran 90 module can
</span><br>
<span class="quotelev1">&gt;  still be invoked from F90 applications, but will fall back to
</span><br>
<span class="quotelev1">&gt;  Fortran-77 style checking (i.e., little/none).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - trivial: Only includes F90-specific functions from MPI-2.  This
</span><br>
<span class="quotelev1">&gt;    means overloaded versions of MPI_SIZEOF for all the MPI-supported
</span><br>
<span class="quotelev1">&gt;    F90 intrinsic types.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - small (default): All the functions in &quot;trivial&quot; plus all MPI
</span><br>
<span class="quotelev1">&gt;    functions that take no choice buffers (meaning buffers that are
</span><br>
<span class="quotelev1">&gt;    specified by the user and are of type (void*) in the C bindings --
</span><br>
<span class="quotelev1">&gt;    generally buffers specified for message passing).  Hence,
</span><br>
<span class="quotelev1">&gt;    functions like MPI_COMM_RANK are included, but functions like
</span><br>
<span class="quotelev1">&gt;    MPI_SEND are not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - medium: All the functions in &quot;small&quot; plus all MPI functions that
</span><br>
<span class="quotelev1">&gt;    take one choice buffer (e.g., MPI_SEND, MPI_RECV, ...).  All
</span><br>
<span class="quotelev1">&gt;    one-choice-buffer functions have overloaded variants for each of
</span><br>
<span class="quotelev1">&gt;    the MPI-supported Fortran intrinsic types up to the number of
</span><br>
<span class="quotelev1">&gt;    dimensions specified by --with-f90-max-array-dim (default value is
</span><br>
<span class="quotelev1">&gt;    4).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Increasing the size of the F90 module (in order from trivial, small,
</span><br>
<span class="quotelev1">&gt;  and medium) will generally increase the length of time required to
</span><br>
<span class="quotelev1">&gt;  compile user MPI applications.  Specifically, &quot;trivial&quot;- and
</span><br>
<span class="quotelev1">&gt;  &quot;small&quot;-sized F90 modules generally allow user MPI applications to
</span><br>
<span class="quotelev1">&gt;  be compiled fairly quickly but lose type safety for all MPI
</span><br>
<span class="quotelev1">&gt;  functions with choice buffers.  &quot;medium&quot;-sized F90 modules generally
</span><br>
<span class="quotelev1">&gt;  take longer to compile user applications but provide greater type
</span><br>
<span class="quotelev1">&gt;  safety for MPI functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Note that MPI functions with two choice buffers (e.g., MPI_GATHER)
</span><br>
<span class="quotelev1">&gt;  are not currently included in Open MPI's F90 interface.  Calls to
</span><br>
<span class="quotelev1">&gt;  these functions will automatically fall through to Open MPI's F77
</span><br>
<span class="quotelev1">&gt;  interface.  A &quot;large&quot; size that includes the two choice buffer MPI
</span><br>
<span class="quotelev1">&gt;  functions is possible in future versions of Open MPI.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, we're arguing^H^H^H^H^H^H^Hdiscussing new Fortran 2003 bindings for
</span><br>
<span class="quotelev1">&gt; MPI in the MPI-3 Forum right now.  We have already addressed the problems
</span><br>
<span class="quotelev1">&gt; discussed above (F03 now has an equivalent of (void*)), and hope to do a few
</span><br>
<span class="quotelev1">&gt; more minor things as well.  There's also discussion of the possibility of a
</span><br>
<span class="quotelev1">&gt; Boost.MPI-like Fortran 2003 MPI library that would take advantage of many of
</span><br>
<span class="quotelev1">&gt; the features of the language, but be a little farther away from the official
</span><br>
<span class="quotelev1">&gt; MPI bindings (see www.boost-org for details about how their nifty C++
</span><br>
<span class="quotelev1">&gt; library works on top of MPI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><p><pre>
-- 
Cheers,
Brian
brian.harker_at_[hidden]
&quot;In science, there is only physics; all the rest is stamp-collecting.&quot;
 -Ernest Rutherford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6685.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6683.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6683.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6685.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6685.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6686.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
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

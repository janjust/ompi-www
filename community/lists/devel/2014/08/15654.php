<?
$subject_val = "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 14:44:13 2014" -->
<!-- isoreceived="20140814184413" -->
<!-- sent="Thu, 14 Aug 2014 11:44:11 -0700" -->
<!-- isosent="20140814184411" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers" -->
<!-- id="CAAvDA16Rv2YRBH8RTNTbYE69e-pV_aWesYLT3SxBhyMpyLE7bA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAG4F6z9WkMzyCsgjR=3YLwUHrFgYGbhADK2Tn_WVTT7Q07GAtQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 14:44:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15655.php">George Bosilca: "Re: [OMPI devel] RFC: add opal/threads/spinlock.h"</a>
<li><strong>Previous message:</strong> <a href="15653.php">Joshua Ladd: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>In reply to:</strong> <a href="15653.php">Joshua Ladd: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15661.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>Reply:</strong> <a href="15661.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>The specific compilers that caused the most problems are the older PGI
<br>
compilers (any before 13.x).
<br>
In this case the user has the option to update their compiler to 13.10 or
<br>
newer.
<br>
<p>There are also issues with IBM's xlf.
<br>
For the IBM compiler I have never found a version that builds/links the MPI
<br>
f08 bindings, and now also find no version that can link the OSHMEM fortran
<br>
bindings.
<br>
<p>-Paul
<br>
<p>-Paul
<br>
<p><p>On Thu, Aug 14, 2014 at 11:30 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We will update the README accordingly. Thank you, Paul.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 14, 2014 at 10:00 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good points.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox -- can you update per Paul's suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 13, 2014, at 8:26 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The following is NOT a bug report.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This is just an observation that may deserve some text in the README.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I've reported issues in the past with some Fortran compilers (mostly
</span><br>
<span class="quotelev2">&gt;&gt; older XLC and PGI) which either cannot build the &quot;use mpi_f08&quot; module, or
</span><br>
<span class="quotelev2">&gt;&gt; cannot correctly link to it (and sometimes this fails only if configured
</span><br>
<span class="quotelev2">&gt;&gt; with --enable-debug).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Testing the OSHMEM Fortran bindings (enabled by default on Linux) I
</span><br>
<span class="quotelev2">&gt;&gt; have found several compilers which fail to link the examples
</span><br>
<span class="quotelev2">&gt;&gt; (hello_oshmemfh and ring_oshmemfh).  I reported one specific instance (with
</span><br>
<span class="quotelev2">&gt;&gt; xlc-11/xlf-13) back in February:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/02/14057.php">http://www.open-mpi.org/community/lists/devel/2014/02/14057.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So far I have these failures only on platforms where the Fortran
</span><br>
<span class="quotelev2">&gt;&gt; compiler is *known* to be broken for the MPI f90 and/or f08 bindings.
</span><br>
<span class="quotelev2">&gt;&gt; Specifically, all the failing platforms are ones on which either:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; + Configure determines (without my help) that FC cannot build the F90
</span><br>
<span class="quotelev2">&gt;&gt; and/or F08 modules.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OR
</span><br>
<span class="quotelev3">&gt;&gt; &gt; + I must pass --enable-mpi-fortran=usempi or --enable-mpi-fortran=mpifh
</span><br>
<span class="quotelev2">&gt;&gt; for cases configure cannot detect.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So, I do *not* believe there is anything wrong with the OSHMEM code,
</span><br>
<span class="quotelev2">&gt;&gt; which is why I started this post with &quot;The following is NOT a bug report&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; However, I have two recommendations to make:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1) Documentation
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The README says just:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --disable-oshmem-fortran
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Disable building only the Fortran OSHMEM bindings.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So, I recommend adding a sentence there referencing the &quot;Compiler
</span><br>
<span class="quotelev2">&gt;&gt; Notes&quot; section of the README which has details on some known bad Fortran
</span><br>
<span class="quotelev2">&gt;&gt; compilers.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2) Configure:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; As I noted above, at least some of the failures are on platforms where
</span><br>
<span class="quotelev2">&gt;&gt; configure has determined it cannot build the f08 MPI bindings.  So, maybe
</span><br>
<span class="quotelev2">&gt;&gt; there is something that could be done at configure time to disqualify some
</span><br>
<span class="quotelev2">&gt;&gt; Fortran compilers from building the OSHMEM fotran bindings, too.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15643.php">http://www.open-mpi.org/community/lists/devel/2014/08/15643.php</a>
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
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15650.php">http://www.open-mpi.org/community/lists/devel/2014/08/15650.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15653.php">http://www.open-mpi.org/community/lists/devel/2014/08/15653.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15654/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15655.php">George Bosilca: "Re: [OMPI devel] RFC: add opal/threads/spinlock.h"</a>
<li><strong>Previous message:</strong> <a href="15653.php">Joshua Ladd: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>In reply to:</strong> <a href="15653.php">Joshua Ladd: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15661.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>Reply:</strong> <a href="15661.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
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

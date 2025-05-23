<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 10:51:06 2015" -->
<!-- isoreceived="20150904145106" -->
<!-- sent="Fri, 4 Sep 2015 07:51:02 -0700" -->
<!-- isosent="20150904145102" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="DA02B2A3-ED06-4BCA-B38E-695FBA9AC081_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0429C22EBDB44040B478F8F77EF14518DD2DC7_at_ORSMSX114.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0 issue<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 10:51:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17971.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17971.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Understood - for now, it appears RH has an acceptable solution by using the MCA param, so I see no need for further action until you complete the fix
<br>
<p><p><span class="quotelev1">&gt; On Sep 4, 2015, at 7:45 AM, Friedley, Andrew &lt;andrew.friedley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The PSM2 MTL code I submitted to master, 1.10, and 2.x will auto-build if the library is detected in the system; I don't think that's been changed since.  Feel free to disable the auto-build until we can get a PSM2 solution, but we'd much prefer not to outright remove the PSM2 MTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph
</span><br>
<span class="quotelev2">&gt;&gt; Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, September 3, 2015 4:44 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] 1.10.0 issue
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it actually is rather easy to do. I can check, but I think that should happen
</span><br>
<span class="quotelev2">&gt;&gt; now (unless psm2 was set to auto-build if the lib was detected). Regardless,
</span><br>
<span class="quotelev2">&gt;&gt; we can always have RH et al simply build with &#226;&#128;&#148;enable-mca-no-build=mtl-
</span><br>
<span class="quotelev2">&gt;&gt; psm2 and that will solve the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please keep us posted - and thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 3, 2015, at 3:44 PM, Friedley, Andrew &lt;andrew.friedley_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph &amp; crew,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm representing the Intel PSM team to Open MPI.  They're aware of the
</span><br>
<span class="quotelev2">&gt;&gt; problem and have seen the comments on both this thread and in OFI, and
</span><br>
<span class="quotelev2">&gt;&gt; are working on solving the issue within PSM2.  Current estimate is that it will
</span><br>
<span class="quotelev2">&gt;&gt; take 3-4 weeks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If it comes to removing the PSM2 MTL from 1.10, would it instead be
</span><br>
<span class="quotelev2">&gt;&gt; possible to disable it from being configured/built by default, unless
</span><br>
<span class="quotelev2">&gt;&gt; specifically requested using --with-psm2?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andrew
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Wednesday, September 2, 2015 6:22 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: [OMPI devel] 1.10.0 issue
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I regret to say that 1.10.0 is hitting an issue with at least one upstream
</span><br>
<span class="quotelev2">&gt;&gt; distro.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Apparently, there is a symbol conflict between the PSM and PSM2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libraries that precludes building both of those MTLs at the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time. This is leading the distro to push for release of two OMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.10.0 builds - one with PSM and the other with PSM2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IMO, this is a very undesirable situation. I agree with the distro
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that delaying release for some significant time as this would impact
</span><br>
<span class="quotelev2">&gt;&gt; everyone else&#226;&#128;&#153;s users.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Therefore, assuming that the PSM team is unable to quickly resolve
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the problem in their libraries, my inclination is to release an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; immediate 1.10.1 with the PSM2 MTL removed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I&#226;&#128;&#153;m soliciting input - any opinions?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi.org/community/lists/devel/2015/09/17919.php
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17953.php">http://www.open-mpi.org/community/lists/devel/2015/09/17953.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org/community/lists/devel/2015/09/17956.php
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17971.php">http://www.open-mpi.org/community/lists/devel/2015/09/17971.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17971.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17971.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
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

<?
$subject_val = "Re: [OMPI devel] RFC: dead code removal";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 15 20:41:40 2013" -->
<!-- isoreceived="20130516004140" -->
<!-- sent="Wed, 15 May 2013 17:41:33 -0700" -->
<!-- isosent="20130516004133" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: dead code removal" -->
<!-- id="DF630A9F-0EE3-47E7-B421-E502454DAEAF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F624B18_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: dead code removal<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-15 20:41:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12391.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: dead code removal"</a>
<li><strong>Previous message:</strong> <a href="12389.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: dead code removal"</a>
<li><strong>In reply to:</strong> <a href="12389.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: dead code removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12391.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: dead code removal"</a>
<li><strong>Reply:</strong> <a href="12391.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: dead code removal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...some of this doesn't look right to me. It could be that some of the code changed and stale things didn't get removed, but the snippets of logic in your patch raise alarms in some cases.
<br>
<p>Can you allow a bit more time? I need to apply the patch and actually look at the total code path to understand *why* some of these variables are no longer being used. My fear is that there are cmd line options that may not be working correctly (but rarely get used/tested) because (a) the variable is correct, but (b) somehow the rest of the code is in error.
<br>
<p><p>On May 15, 2013, at 5:24 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Remove a bunch of &quot;set but not used&quot; variables / dead code
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: Because it's dead code
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: All over, but NOT the BTL ALLOC macros (per prior argu^H^H^H^Hdiscussion)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: Tomorrow (16 May 2013), COB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More detail:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc 4.7.x squawks a lot about &quot;set but unused&quot; variables.  I took a sweep through and removed a bunch of them -- they're all obviously dead code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did *not*, however, remove the setting of rc in the various BTL/OOB ALLOC_FRAG macros, per prior disagreements in emails about this.  Perhaps someone else will find a compromise for that someday -- this patch is not about fixing those warnings.  This patch is only about removing the obvious set-but-really-never-used variables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Short timeout because this is actually pretty trivial, but it does touch other people's code, so I wanted people to see it / get a heads-up before I committed.  Patch attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; &lt;dead-code-removal-trunk.diff&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12391.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: dead code removal"</a>
<li><strong>Previous message:</strong> <a href="12389.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: dead code removal"</a>
<li><strong>In reply to:</strong> <a href="12389.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: dead code removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12391.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: dead code removal"</a>
<li><strong>Reply:</strong> <a href="12391.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: dead code removal"</a>
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

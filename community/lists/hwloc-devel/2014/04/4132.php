<?
$subject_val = "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 17:55:40 2014" -->
<!-- isoreceived="20140423215540" -->
<!-- sent="Wed, 23 Apr 2014 21:55:38 +0000" -->
<!-- isosent="20140423215538" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PATCH: Mark fd as close-on-exec" -->
<!-- id="C0923386-5521-4426-8941-440AAD70E2AE_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20140423215252.GB5857_at_type" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PATCH: Mark fd as close-on-exec<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 17:55:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4133.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Previous message:</strong> <a href="4131.php">Samuel Thibault: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>In reply to:</strong> <a href="4131.php">Samuel Thibault: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4133.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Reply:</strong> <a href="4133.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Reply:</strong> <a href="4134.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Will do.
<br>
<p>On Apr 23, 2014, at 5:52 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres (jsquyres), le Wed 23 Apr 2014 21:05:55 +0000, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Any objections to this patch?  In OMPI, we're seeing this fd leak into child processes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/src/topology-linux.c b/src/topology-linux.c
</span><br>
<span class="quotelev2">&gt;&gt; index e934d4c..8c5fba1 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/src/topology-linux.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/src/topology-linux.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -4601,6 +4601,13 @@ hwloc_linux_component_instantiate(struct hwloc_disc_compo
</span><br>
<span class="quotelev2">&gt;&gt;     data-&gt;is_real_fsroot = 0;
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We probably want an #ifdef FD_CLOEXEC here, not all systems have it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +  /* Since this fd stays open after hwloc returns, mark it as
</span><br>
<span class="quotelev2">&gt;&gt; +     close-on-exec so that children don't inherit it */
</span><br>
<span class="quotelev2">&gt;&gt; +  if (fcntl(root, F_SETFD, FD_CLOEXEC) == -1) {
</span><br>
<span class="quotelev2">&gt;&gt; +      close(root);
</span><br>
<span class="quotelev2">&gt;&gt; +      root = -1;
</span><br>
<span class="quotelev2">&gt;&gt; +      goto out_with_data;
</span><br>
<span class="quotelev2">&gt;&gt; +  }
</span><br>
<span class="quotelev2">&gt;&gt; #else
</span><br>
<span class="quotelev2">&gt;&gt;   if (strcmp(fsroot_path, &quot;/&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;     errno = ENOSYS;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; Je suis maintenant possesseur d'un ordinateur portable Compaq Armada
</span><br>
<span class="quotelev1">&gt; 1592DT avec port infra-rouge. Auriez-vous connaissance de programmes
</span><br>
<span class="quotelev1">&gt; suceptibles d'utiliser ce port afin de servir de t&#233;l&#233;commande ?
</span><br>
<span class="quotelev1">&gt; -+- JN in NPC : ben quoi, c'est pas &#224; &#231;a que &#231;a sert ?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4133.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Previous message:</strong> <a href="4131.php">Samuel Thibault: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>In reply to:</strong> <a href="4131.php">Samuel Thibault: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4133.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Reply:</strong> <a href="4133.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Reply:</strong> <a href="4134.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
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

<?
$subject_val = "Re: [hwloc-devel] 1.3.1 and 1.4rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 12:45:52 2011" -->
<!-- isoreceived="20111213174552" -->
<!-- sent="Tue, 13 Dec 2011 18:45:17 +0100" -->
<!-- isosent="20111213174517" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.1 and 1.4rc1" -->
<!-- id="20111213174517.GA4359_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1983895151.647029.1323796432417.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3.1 and 1.4rc1<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 12:45:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2615.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2613.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Maybe in reply to:</strong> <a href="2587.php">Brice Goglin: "[hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2619.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2619.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 13 Dec 2011 18:13:52 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 13/12/2011 18:02, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Brice Goglin, le Tue 13 Dec 2011 16:41:08 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Le 13/12/2011 16:22, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I can't speak for GPUs, but I think the PCI information will be useful to know what devices are close to what PUs / NUMA nodes.  That information can be used to make decisions about binding, for example (i.e., you want to be &quot;close&quot; to the specific PCI resources that you'll be using).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In most cases, you don't need PCI support for this, you juste manipulate
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a cuda device, an ibv_device, a MX endpoint, ... and use one of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; inline helpers to get the corresponding locality (a cpuset).
</span><br>
<span class="quotelev2">&gt; &gt; A problem I see there is that although you can write such helper for
</span><br>
<span class="quotelev2">&gt; &gt; Linux, nothing guarantees that it'll be so easy for other OSes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And ? :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We already have many features that are only supported on Linux. OS
</span><br>
<span class="quotelev1">&gt; devices for instance.
</span><br>
<p>Yes, and these are through library functions, not helpers. Whenever
<br>
hwloc gets support for other OSes, you don't have to change your
<br>
application to benefit from the new support. The current linux-only
<br>
helpers can't even be compiled on non-Linux OSes, so applications have
<br>
to deal with it themselves, which is a bad thing. linux-libnuma is an
<br>
example where it can only be useful on Linux, so that's no problem.  But
<br>
the glibc helpers should work on all glibc-based systems. I don't know
<br>
the portability of myriexpress.h and infiniband/verbs.h, but the CUDA
<br>
helpers, for instance, should work on windows too.
<br>
<p><span class="quotelev1">&gt; libpci isn't portable to all OS we support, ...
</span><br>
<p>That's no reason. Other OSes have other interfaces, that's fine, that's
<br>
what hwloc is there for...
<br>
<p><span class="quotelev1">&gt; As long as we don't add something obviously not portable, I am fine.
</span><br>
<p>The current openfabrics-verbs.h and cuda*.h are obviously not portable.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2615.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2613.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Maybe in reply to:</strong> <a href="2587.php">Brice Goglin: "[hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2619.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Reply:</strong> <a href="2619.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
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

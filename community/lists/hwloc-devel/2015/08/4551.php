<?
$subject_val = "Re: [hwloc-devel] hwloc on Windows?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 11:39:23 2015" -->
<!-- isoreceived="20150817153923" -->
<!-- sent="Mon, 17 Aug 2015 15:39:19 +0000" -->
<!-- isosent="20150817153919" -->
<!-- name="Tannenbaum, Barry M" -->
<!-- email="barry.m.tannenbaum_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc on Windows?" -->
<!-- id="6B86B7F2A4026246AA81BA1ABF9756906A7A5D55_at_fmsmsx107.amr.corp.intel.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="55CEE03A.9070105_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc on Windows?<br>
<strong>From:</strong> Tannenbaum, Barry M (<em>barry.m.tannenbaum_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-17 11:39:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4552.php">Brice Goglin: "Re: [hwloc-devel] hwloc on Windows?"</a>
<li><strong>Previous message:</strong> <a href="4550.php">Brice Goglin: "Re: [hwloc-devel] hwloc on Windows?"</a>
<li><strong>In reply to:</strong> <a href="4550.php">Brice Goglin: "Re: [hwloc-devel] hwloc on Windows?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4552.php">Brice Goglin: "Re: [hwloc-devel] hwloc on Windows?"</a>
<li><strong>Reply:</strong> <a href="4552.php">Brice Goglin: "Re: [hwloc-devel] hwloc on Windows?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you can give me a clue where HWLOC_VERSION is *supposed* to be defined, I'll run through and at least get rid of the annoying warnings that Visual Studio is spewing. Things like size conversion warnings and signed/unsigned mismatches.
<br>
<p><p>-        Barry
<br>
<p>From: hwloc-devel [mailto:hwloc-devel-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: Saturday, August 15, 2015 2:46 AM
<br>
To: hwloc-devel_at_[hidden]
<br>
Subject: Re: [hwloc-devel] hwloc on Windows?
<br>
<p>Le 14/08/2015 23:44, Tannenbaum, Barry M a &#233;crit :
<br>
I'm trying to build/use hwloc on Windows.
<br>
<p>The first question is does hwloc do anything to explore the storage devices on a Windows system?
<br>
<p>Hello
<br>
<p>Not yet. If I remember correctly, the main issue for I/O devices on Windows is that PCI locality is available since Windows 8 (or something &quot;recent&quot; I don't have). We have had <a href="https://github.com/open-mpi/hwloc/issues/108">https://github.com/open-mpi/hwloc/issues/108</a> open for a while but couldn't really look at it.
<br>
If you have patches, we'll be happy to integrate them, assuming we don't need very recent windows releases :/
<br>
<p><p>The second question is how do you build hwloc on Windows? I'm building with Cygwin and Visual Studio 2013. I managed to coerce the configuration script to run, but when I tried to issue the &quot;make&quot; command, it bombed out, starting with a message from cl that it didn't know the &quot;-g&quot; option.
<br>
<p>I don't know how to solve this BUT I recently found that hwloc 1.11 was being added to the cygwin distribution.
<br>
&nbsp;&nbsp;<a href="https://cygwin.com/ml/cygwin/2015-06/msg00418.html">https://cygwin.com/ml/cygwin/2015-06/msg00418.html</a>
<br>
Could this help?
<br>
<p><p><p>Trying to use the Visual Studio project provided, I got a pile of warnings, and then errors looking for definitions of HWLOC_VERSION.
<br>
<p>Unfornately, we have no way to automatize the testing of these files, and they get outdated quickly. They were written for 1.9. Since 1.10, we use HWLOC_VERSION instead of VERSION everywhere in the code, so I guess the project files should be updated to define HWLOC_VERSION as well.
<br>
<p><p><p>Obviously I'm doing this wrong. Can someone suggest how to build hwloc on Windows?
<br>
<p><p>Looks like you're not doing anything wrong. You're just unlucky, being one of the very few people that tries to build recent releases :/
<br>
<p>Brice
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4551/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4552.php">Brice Goglin: "Re: [hwloc-devel] hwloc on Windows?"</a>
<li><strong>Previous message:</strong> <a href="4550.php">Brice Goglin: "Re: [hwloc-devel] hwloc on Windows?"</a>
<li><strong>In reply to:</strong> <a href="4550.php">Brice Goglin: "Re: [hwloc-devel] hwloc on Windows?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4552.php">Brice Goglin: "Re: [hwloc-devel] hwloc on Windows?"</a>
<li><strong>Reply:</strong> <a href="4552.php">Brice Goglin: "Re: [hwloc-devel] hwloc on Windows?"</a>
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

<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 29 10:05:04 2013" -->
<!-- isoreceived="20130829140504" -->
<!-- sent="Thu, 29 Aug 2013 16:05:01 +0200" -->
<!-- isosent="20130829140501" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released" -->
<!-- id="521F550D.6030308_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALT_uBQ=J2qihYbQtFY0rTaYbg1yk8CudD4ZgOfSnx9ecKE4rg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-29 10:05:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0906.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0904.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0904.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0906.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released"</a>
<li><strong>Reply:</strong> <a href="0906.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There will be a v1.8rc1 in the near future (within a month) so I'd
<br>
rather put such a change there.
<br>
<p>Brice
<br>
<p><p><p>Le 29/08/2013 15:48, Jiri Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is there any change to add the release tag
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $uname -r
</span><br>
<span class="quotelev1">&gt; 3.10.7-100.fc18.x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to the graphical output in 1.7.2 ? (see also my other email I sent to
</span><br>
<span class="quotelev1">&gt; you 2 minutes ago).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jirka
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 29, 2013 at 11:32 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The Hardware Locality (hwloc) team is pleased to announce the first
</span><br>
<span class="quotelev1">&gt;     release candidate of v1.7.2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     v1.7.2 is a bug fix release which addresses all known bugs in the
</span><br>
<span class="quotelev1">&gt;     v1.7 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The following is a summary of the changes since v1.7.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     * Do not create invalid block OS devices on very old Linux kernel such
</span><br>
<span class="quotelev1">&gt;       as RHEL4 2.6.9.
</span><br>
<span class="quotelev1">&gt;     * Fix PCI subvendor/device IDs.
</span><br>
<span class="quotelev1">&gt;     * Fix the management of Misc objects inserted by parent.
</span><br>
<span class="quotelev1">&gt;       Thanks to Jirka Hladky for reporting the problem.
</span><br>
<span class="quotelev1">&gt;     * Add a Port&lt;n&gt;State into attribute to OpenFabrics OS devices.
</span><br>
<span class="quotelev1">&gt;     * Add a MICSerialNumber info attribute to Xeon PHI/MIC OS devices.
</span><br>
<span class="quotelev1">&gt;     * Improve verbose error messages when failing to load from XML.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     hwloc-announce mailing list
</span><br>
<span class="quotelev1">&gt;     hwloc-announce_at_[hidden] &lt;mailto:hwloc-announce_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-announce">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-announce</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0905/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0906.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0904.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0904.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0906.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released"</a>
<li><strong>Reply:</strong> <a href="0906.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.7.2rc1 released"</a>
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

<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 14 08:41:12 2014" -->
<!-- isoreceived="20140114134112" -->
<!-- sent="Tue, 14 Jan 2014 13:41:08 +0000" -->
<!-- isosent="20140114134108" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64" -->
<!-- id="A75DAE3E-F7BF-4EF4-90B0-C53008FD5906_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="680B8A8D-85CE-47EC-B380-5A6D859AF2D8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-14 08:41:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13774.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Previous message:</strong> <a href="13772.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>In reply to:</strong> <a href="13772.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13775.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Reply:</strong> <a href="13775.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More tweaking -- I don't think there's an explicit reason to mention gfortran, is there?
<br>
<p>- On NetBSD-6 (at least AMD64 and i386), and possibly on OpenBSD,
<br>
&nbsp;&nbsp;libtool misidentifies properties of f95/g95, leading to obscure
<br>
&nbsp;&nbsp;compile-time failures if used to build Open MPI.  You can work
<br>
&nbsp;&nbsp;around this issue by ensuring that libtool will not use f95/g95
<br>
&nbsp;&nbsp;(e.g., by specifying FC=&lt;some_other_compiler&gt;, or otherwise ensuring
<br>
&nbsp;&nbsp;a different Fortran compiler will be found earlier in the path than
<br>
&nbsp;&nbsp;f95/g95), or by disabling the Fortran MPI bindings with
<br>
&nbsp;&nbsp;--disable-mpi-fortran.
<br>
<p><p>On Jan 14, 2014, at 8:15 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 14, 2014, at 2:44 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem surfaces on i386 too, and use of gfortran seems the best fix.
</span><br>
<span class="quotelev2">&gt;&gt; My recommended rewrite:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - On NetBSD-6 (at least AMD64 and i386) libtool misidentifies properties of
</span><br>
<span class="quotelev2">&gt;&gt;  f95/g95, leading to obscure compile-time failures if used to build Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;  You can work around this issue by either installing gfortran, removing f95
</span><br>
<span class="quotelev2">&gt;&gt;  and g95 from your path, or by configuring Open MPI to disable the fortran
</span><br>
<span class="quotelev2">&gt;&gt;  bindings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tweaked a bit -- how's this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - On NetBSD-6 (at least AMD64 and i386), and possibly on OpenBSD,
</span><br>
<span class="quotelev1">&gt;  libtool misidentifies properties of f95/g95, leading to obscure
</span><br>
<span class="quotelev1">&gt;  compile-time failures if used to build Open MPI.  You can work
</span><br>
<span class="quotelev1">&gt;  around this issue by ensuring that libtool will not find f95/g95
</span><br>
<span class="quotelev1">&gt;  (e.g., by specifying FC=gfortran, or otherwise ensuring gfortran
</span><br>
<span class="quotelev1">&gt;  will be found earlier in the path than f95/g95), or by configuring
</span><br>
<span class="quotelev1">&gt;  Open MPI to disable the Fortran MPI bindings.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13774.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Previous message:</strong> <a href="13772.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>In reply to:</strong> <a href="13772.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13775.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Reply:</strong> <a href="13775.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
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

<?
$subject_val = "Re: [OMPI devel] libevent socket code";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 02:50:04 2012" -->
<!-- isoreceived="20120501065004" -->
<!-- sent="Tue, 1 May 2012 06:49:58 +0000" -->
<!-- isosent="20120501064958" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libevent socket code" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D71516FBA6FE_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AB385AD8-C4FF-40F6-BF8C-31E5D3B44CDA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] libevent socket code<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 02:49:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10947.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10945.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10943.php">Ralph Castain: "Re: [OMPI devel] libevent socket code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10947.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Reply:</strong> <a href="10947.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When building statically on Cielito I see the following warnings:
<br>
/scratch/hjelmn/xe6/openmpi-gcc/trunk/lib/libmpi.a(session_dir.o): In function `orte_session_dir_get_name':
<br>
session_dir.c:(.text+0x204): warning: Using 'getpwuid' in statically linked applications requires at runtime the shared libraries from the glibc version used for linking
<br>
/scratch/hjelmn/xe6/openmpi-gcc/trunk/lib/libmpi.a(evutil.o): In function `test_for_getaddrinfo_hacks':
<br>
evutil.c:(.text+0x7a): warning: Using 'getaddrinfo' in statically linked applications requires at runtime the shared libraries from the glibc version used for linking
<br>
/scratch/hjelmn/xe6/openmpi-gcc/trunk/lib/libmpi.a(evutil.o): In function `evutil_unparse_protoname':
<br>
evutil.c:(.text+0x7a): warning: Using 'getprotobynumber' in statically linked applications requires at runtime the shared libraries from the glibc version used for linking
<br>
/scratch/hjelmn/xe6/openmpi-gcc/trunk/lib/libmpi.a(if.o): In function `opal_ifaddrtoname':
<br>
if.c:(.text+0x37c): warning: Using 'gethostbyname' in statically linked applications requires at runtime the shared libraries from the glibc version used for linking
<br>
<p><p>Two of those warnings are coming from libevent functions we do not use (and probably never will). The other two may be a little trickier to fix.
<br>
<p>-Nathan
<br>
<p>Excuse the terribly reply format. OWA sucks.
<br>
________________________________________
<br>
From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Monday, April 30, 2012 2:55 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] libevent socket code
<br>
<p>Can you send me a copy of the warnings, or tell me which machine at LANL is generating them? I'm working on libevent now (found a bug they are helping with) and can take a look at it.
<br>
<p><p>On Apr 25, 2012, at 11:05 AM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; Let me take a look. The code in question is in evutil.c and bufferevent_sock.c . If there is no option we might be able to get away with just removing these files from the Makefile.am.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 25 Apr 2012, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 25, 2012, at 12:50 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can't it be done with configuring --without-libevent-sockets or some such thing? I really hate munging the code directly as it creates lots of support issues and makes it harder to upgrade.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If there's a libevent configure option we should be using, we can probably set that to be enabled by default.  Let me know.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10947.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10945.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10943.php">Ralph Castain: "Re: [OMPI devel] libevent socket code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10947.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>Reply:</strong> <a href="10947.php">Jeff Squyres: "Re: [OMPI devel] libevent socket code"</a>
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

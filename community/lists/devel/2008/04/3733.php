<?
$subject_val = "Re: [OMPI devel] Memchecker: breaks trunk again";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 10:48:54 2008" -->
<!-- isoreceived="20080421144854" -->
<!-- sent="Mon, 21 Apr 2008 10:48:35 -0400" -->
<!-- isosent="20080421144835" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memchecker: breaks trunk again" -->
<!-- id="B4D165E3-88AC-474F-BB51-54086C398787_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4320033.D2AB%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Memchecker: breaks trunk again<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-21 10:48:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3734.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Previous message:</strong> <a href="3732.php">Brian W. Barrett: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>In reply to:</strong> <a href="3731.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3736.php">Rainer Keller: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Reply:</strong> <a href="3736.php">Rainer Keller: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, I see what's happening.
<br>
<p>The opal/mca/memchecker/valgrind/configure.m4 file is using &quot;want  
<br>
memchecker&quot; to indicate that you want valgrind support.  I think that  
<br>
these should be two different issues.  I'll file a ticket.
<br>
<p>Additionally, for the platform file overriding the configure command  
<br>
line; I *think* that that's expected behavior -- the platform file is  
<br>
a tradeoff and had to be implemented as an ugly hack because of the  
<br>
way autoconf parses command line flags (IIRC, the command line flags  
<br>
are parsed and *then* the platform file is parsed -- I don't think  
<br>
there was another way to do it).  Perhaps that behavior should be  
<br>
documented.
<br>
<p><p>On Apr 21, 2008, at 10:26 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/21/08 8:10 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  I do not have this problem on OS X (where I do not have  
</span><br>
<span class="quotelev2">&gt;&gt; Valgrind
</span><br>
<span class="quotelev2">&gt;&gt; installed) as of this morning's trunk.  configure correctly  
</span><br>
<span class="quotelev2">&gt;&gt; determines
</span><br>
<span class="quotelev2">&gt;&gt; that valgrind is not present and therefore continues on:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- MCA component memchecker:valgrind (m4 configuration macro)
</span><br>
<span class="quotelev2">&gt;&gt; checking for MCA component memchecker:valgrind compile mode... static
</span><br>
<span class="quotelev2">&gt;&gt; checking if MCA component memchecker:valgrind can compile... no
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that your message indicates that configure thinks that valgrind
</span><br>
<span class="quotelev2">&gt;&gt; support was explicitly requested.  In this case, configure thinks,
</span><br>
<span class="quotelev2">&gt;&gt; &quot;you explicitly requested it, I cannot provide it, so I should abort
</span><br>
<span class="quotelev2">&gt;&gt; rather than give unexpected results.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know that - but I am not explicitly requesting it. In fact, I  
</span><br>
<span class="quotelev1">&gt; explicitly
</span><br>
<span class="quotelev1">&gt; put --without-valgrind, to no effect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is what I have discovered may be the source of the problem. I had
</span><br>
<span class="quotelev1">&gt; inserted a enable_memchecker=yes line in my platform file. This  
</span><br>
<span class="quotelev1">&gt; apparently
</span><br>
<span class="quotelev1">&gt; has the unfortunate side effect of now requiring valgrind. IMHO,  
</span><br>
<span class="quotelev1">&gt; this should
</span><br>
<span class="quotelev1">&gt; not be setup that way per my earlier comment about requiring debuggers
</span><br>
<span class="quotelev1">&gt; unless memchecker has absolutely no other way to run - which looking  
</span><br>
<span class="quotelev1">&gt; at the
</span><br>
<span class="quotelev1">&gt; framework, would not appear to be true.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then tried still using my platform file, but adding --disable- 
</span><br>
<span class="quotelev1">&gt; memchecker
</span><br>
<span class="quotelev1">&gt; to the configure line. The disable request was apparently ignored,  
</span><br>
<span class="quotelev1">&gt; at least
</span><br>
<span class="quotelev1">&gt; as far as the valgrind part of the request is concerned. The build  
</span><br>
<span class="quotelev1">&gt; failed at
</span><br>
<span class="quotelev1">&gt; the same point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Removing the enable_memchecker=yes line from my platform file allows  
</span><br>
<span class="quotelev1">&gt; me to
</span><br>
<span class="quotelev1">&gt; successfully navigate configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it appears to be a combination of memchecker=yes automatically  
</span><br>
<span class="quotelev1">&gt; requiring
</span><br>
<span class="quotelev1">&gt; valgrind, and the override on the configure line of a param set by a
</span><br>
<span class="quotelev1">&gt; platform file not working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can send you some stuff off-list in a little bit, if you still  
</span><br>
<span class="quotelev1">&gt; need it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send your full configure output and config.log?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 21, 2008, at 9:51 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As an FYI for anyone similarly afflicted:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only solution I have found is to gut the file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal/mca/memchecker/valgrind/configure.m4:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # MCA_memchecker_valgrind_CONFIG([action-if-found], [action-if-not-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # -----------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_DEFUN([MCA_memchecker_valgrind_CONFIG],[
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       happy=0                      # none_needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       happy_value=0                # none_needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       memchecker_valgrind_happy=0  # This should suffice to get rid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       should_build=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       want_component=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ])dnl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nothing else will allow you to build unless you have the valgrind
</span><br>
<span class="quotelev3">&gt;&gt;&gt; headers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed on your machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 4/21/08 7:28 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am finding that the memchecker code is again breaking the trunk,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specifically on any machine that does not have valgrind installed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Apparently, memchecker now forces a requirement for valgrind?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is what I get:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- MCA component memchecker:valgrind (m4 configuration macro)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking for MCA component memchecker:valgrind compile mode...  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; static
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking checking for the valgrind include directory ... none  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; needed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking valgrind/valgrind.h usability... no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking valgrind/valgrind.h presence... no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking for valgrind/valgrind.h... no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: *** Could not find valgrind header files, as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; valgrind
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support was requested
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: *** Cannot continue
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could somebody please fix this? I thought we had decided many moons
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ago that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we would not require specific debuggers in default build
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configurations - I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; am somewhat surprised, therefore, to find that memchecker is &quot;on&quot;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default, and now requires valgrind!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have tried --disable-memchecker, but nothing will allow me to get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; past
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3734.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Previous message:</strong> <a href="3732.php">Brian W. Barrett: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>In reply to:</strong> <a href="3731.php">Ralph H Castain: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3736.php">Rainer Keller: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Reply:</strong> <a href="3736.php">Rainer Keller: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
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

<?
$subject_val = "Re: [OMPI devel] opal_config_bottom.h question again";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 12:55:27 2014" -->
<!-- isoreceived="20140804165527" -->
<!-- sent="Mon, 4 Aug 2014 18:55:23 +0200" -->
<!-- isosent="20140804165523" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_config_bottom.h question again" -->
<!-- id="20140804165523.GN6715_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140804163913.GM6715_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_config_bottom.h question again<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-04 12:55:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15500.php">Ralph Castain: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Previous message:</strong> <a href="15498.php">Adrian Reber: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>In reply to:</strong> <a href="15498.php">Adrian Reber: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15500.php">Ralph Castain: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Reply:</strong> <a href="15500.php">Ralph Castain: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And with following change I can get it to compile again:
<br>
<p>diff --git a/opal/mca/mpool/base/mpool_base_frame.c b/opal/mca/mpool/base/mpool_base_frame.c
<br>
index c1b044b..f94b8a5 100644
<br>
--- a/opal/mca/mpool/base/mpool_base_frame.c
<br>
+++ b/opal/mca/mpool/base/mpool_base_frame.c
<br>
@@ -21,12 +21,10 @@
<br>
&nbsp;#include &quot;opal_config.h&quot;
<br>
&nbsp;
<br>
&nbsp;#include &lt;stdio.h&gt;
<br>
+#include &lt;stdlib.h&gt;
<br>
&nbsp;#ifdef HAVE_UNISTD_H
<br>
&nbsp;#include &lt;unistd.h&gt; 
<br>
&nbsp;#endif  /* HAVE_UNISTD_H */
<br>
-#ifdef HAVE_MALLOC_H
<br>
-#include &lt;malloc.h&gt;
<br>
-#endif
<br>
&nbsp;
<br>
&nbsp;#include &quot;opal/mca/mca.h&quot;
<br>
&nbsp;#include &quot;opal/mca/base/base.h&quot;
<br>
diff --git a/opal/util/malloc.h b/opal/util/malloc.h
<br>
index db5a4d0..efeaf98 100644
<br>
--- a/opal/util/malloc.h
<br>
+++ b/opal/util/malloc.h
<br>
@@ -21,7 +21,7 @@
<br>
&nbsp;#ifndef OPAL_MALLOC_H
<br>
&nbsp;#define OPAL_MALLOC_H
<br>
&nbsp;
<br>
-#include &quot;opal_config.h&quot;
<br>
+#include &lt;stdio.h&gt;
<br>
&nbsp;#include &lt;stdlib.h&gt;
<br>
&nbsp;
<br>
&nbsp;/*
<br>
<p><p>On Mon, Aug 04, 2014 at 06:39:13PM +0200, Adrian Reber wrote:
<br>
<span class="quotelev1">&gt; I can confirm this on Fedora 20 with gcc 4.8.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running ./configure without any options gives me the same error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 04, 2014 at 04:24:29PM +0000, Pritchard Jr., Howard wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Nope that doesn't fix the problem I'm hitting.   I tried to build the opmi trunk
</span><br>
<span class="quotelev2">&gt; &gt; on a system with a much older gcc compiler (4.4.7) and it compiled :)!  But
</span><br>
<span class="quotelev2">&gt; &gt; I'd like to be able to compile opmi with a newer gcc like the one on my opensuse
</span><br>
<span class="quotelev2">&gt; &gt; 13.1 box.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The preprocessor is pulling in the system malloc.h and that's where things blow up:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   CC       base/mpool_base_frame.lo
</span><br>
<span class="quotelev2">&gt; &gt; In file included from ../../../opal/include/opal_config.h:2750:0,
</span><br>
<span class="quotelev2">&gt; &gt;                  from base/mpool_base_frame.c:21:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../opal/include/opal_config_bottom.h:381:38: error: expected declaration specifiers or '...' before '(' token
</span><br>
<span class="quotelev2">&gt; &gt; #    define malloc(size) opal_malloc((size), __FILE__, __LINE__)
</span><br>
<span class="quotelev2">&gt; &gt;                                       ^
</span><br>
<span class="quotelev2">&gt; &gt; In file included from base/mpool_base_frame.c:28:0:
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/malloc.h:38:1: error: expected declaration specifiers or '...' before string constant
</span><br>
<span class="quotelev2">&gt; &gt; extern void *malloc (size_t __size) __THROW __attribute_malloc__ __wur;
</span><br>
<span class="quotelev2">&gt; &gt; ^
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/malloc.h:38:1: error: expected declaration specifiers or '...' before numeric constant
</span><br>
<span class="quotelev2">&gt; &gt; In file included from ../../../opal/include/opal_config.h:2750:0,
</span><br>
<span class="quotelev2">&gt; &gt;                  from base/mpool_base_frame.c:21:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../opal/include/opal_config_bottom.h:385:48: error: expected declaration specifiers or '...' before '(' token
</span><br>
<span class="quotelev2">&gt; &gt; #    define calloc(nmembers, size) opal_calloc((nmembers), (size), __FILE__, __LINE__)
</span><br>
<span class="quotelev2">&gt; &gt;                                                 ^
</span><br>
<span class="quotelev2">&gt; &gt; ../../../opal/include/opal_config_bottom.h:385:60: error: expected declaration specifiers or '...' before '(' token
</span><br>
<span class="quotelev2">&gt; &gt; #    define calloc(nmembers, size) opal_calloc((nmembers), (size), __FILE__, __LINE__)
</span><br>
<span class="quotelev2">&gt; &gt;                                                             ^
</span><br>
<span class="quotelev2">&gt; &gt; In file included from base/mpool_base_frame.c:28:0:
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/malloc.h:41:1: error: expected declaration specifiers or '...' before string constant
</span><br>
<span class="quotelev2">&gt; &gt; extern void *calloc (size_t __nmemb, size_t __size)
</span><br>
<span class="quotelev2">&gt; &gt; ^
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/malloc.h:41:1: error: expected declaration specifiers or '...' before numeric constant
</span><br>
<span class="quotelev2">&gt; &gt; In file included from ../../../opal/include/opal_config.h:2750:0,
</span><br>
<span class="quotelev2">&gt; &gt;                  from base/mpool_base_frame.c:21:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../opal/include/opal_config_bottom.h:389:45: error: expected declaration specifiers or '...' before '(' token
</span><br>
<span class="quotelev2">&gt; &gt; #    define realloc(ptr, size) opal_realloc((ptr), (size), __FILE__, __LINE__)
</span><br>
<span class="quotelev2">&gt; &gt;                                              ^
</span><br>
<span class="quotelev2">&gt; &gt; ../../../opal/include/opal_config_bottom.h:389:52: error: expected declaration specifiers or '...' before '(' token
</span><br>
<span class="quotelev2">&gt; &gt; #    define realloc(ptr, size) opal_realloc((ptr), (size), __FILE__, __LINE__)
</span><br>
<span class="quotelev2">&gt; &gt;                                                     ^
</span><br>
<span class="quotelev2">&gt; &gt; In file included from base/mpool_base_frame.c:28:0:
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/malloc.h:49:1: error: expected declaration specifiers or '...' before string constant
</span><br>
<span class="quotelev2">&gt; &gt; extern void *realloc (void *__ptr, size_t __size)
</span><br>
<span class="quotelev2">&gt; &gt; ^
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/malloc.h:49:1: error: expected declaration specifiers or '...' before numeric constant
</span><br>
<span class="quotelev2">&gt; &gt; In file included from ../../../opal/include/opal_config.h:2750:0,
</span><br>
<span class="quotelev2">&gt; &gt;                  from base/mpool_base_frame.c:21:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../opal/include/opal_config_bottom.h:393:33: error: expected declaration specifiers or '...' before '(' token
</span><br>
<span class="quotelev2">&gt; &gt; #    define free(ptr) opal_free((ptr), __FILE__, __LINE__)
</span><br>
<span class="quotelev2">&gt; &gt;                                  ^
</span><br>
<span class="quotelev2">&gt; &gt; In file included from base/mpool_base_frame.c:28:0:
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/malloc.h:53:1: error: expected declaration specifiers or '...' before string constant
</span><br>
<span class="quotelev2">&gt; &gt; extern void free (void *__ptr) __THROW;
</span><br>
<span class="quotelev2">&gt; &gt; ^
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/malloc.h:53:1: error: expected declaration specifiers or '...' before numeric constant
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Monday, August 04, 2014 10:09 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] opal_config_bottom.h question again
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I believe the issue is actually in opal/util/malloc.h, Howard. I noticed this while looking around this weekend - someone included opal_config.h in the malloc.h file even though it explicitly says &quot;DON'T DO THIS&quot;  in that header file.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #ifndef OPAL_MALLOC_H
</span><br>
<span class="quotelev2">&gt; &gt; #define OPAL_MALLOC_H
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;opal_config.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /*
</span><br>
<span class="quotelev2">&gt; &gt;  * THIS FILE CANNOT INCLUDE ANY OTHER OPAL HEADER FILES!!!
</span><br>
<span class="quotelev2">&gt; &gt;  *
</span><br>
<span class="quotelev2">&gt; &gt;  * It is included via &lt;opal_config_bottom.h&gt;.  Hence, it should not
</span><br>
<span class="quotelev2">&gt; &gt;  * include ANY other files, nor should it include &quot;opal_config.h&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;  *
</span><br>
<span class="quotelev2">&gt; &gt;  */
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Don't know why someone did that, but you might see if it fixes your problem
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 4, 2014, at 9:00 AM, Pritchard Jr., Howard &lt;howardp_at_[hidden]&lt;mailto:howardp_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As I said last week, I'm noticing now that on my opensuse 13.1 system and gcc 4.8.1, when I do a fresh
</span><br>
<span class="quotelev2">&gt; &gt; checkout of trunk ompi and try to build, without any configure options,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_mpool_frame.c
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; does not compile.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The reason is there is a conflict in opal_config_bottom.h and the contents of malloc.h,
</span><br>
<span class="quotelev2">&gt; &gt; which for my system is pulled in by the preprocessor.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If I undefine HAVE_MALLOC_H in this file, the code compiles fine.  Alternatively,
</span><br>
<span class="quotelev2">&gt; &gt; one can also move the malloc.h include prior to the opal_config.h include and things
</span><br>
<span class="quotelev2">&gt; &gt; work.  Alternatively, one can add the OPAL_DISABLE_ENABLE_MEM_DEBUG define
</span><br>
<span class="quotelev2">&gt; &gt; as in mpool_base_lookup.c , and the compile problem similarly goes away.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'd like to check in a fix for this.  I'd prefer to just move the std include files ahead
</span><br>
<span class="quotelev2">&gt; &gt; of the opal_config.h include.  I'd like to do this today unless someone objects.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm somewhat surprised I'm the only one seeing this though.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Howard
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Howard Pritchard
</span><br>
<span class="quotelev2">&gt; &gt; HPC-5
</span><br>
<span class="quotelev2">&gt; &gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15495.php">http://www.open-mpi.org/community/lists/devel/2014/08/15495.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15497.php">http://www.open-mpi.org/community/lists/devel/2014/08/15497.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15498.php">http://www.open-mpi.org/community/lists/devel/2014/08/15498.php</a>
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p><pre>
-- 
Adrian Reber &lt;adrian_at_[hidden]&gt;            <a href="http://lisas.de/~adrian/">http://lisas.de/~adrian/</a>
Hippogriff, n.:
	An animal (now extinct) which was half horse and half griffin.
	The griffin was itself a compound creature, half lion and half eagle.
	The hippogriff was actually, therefore, only one quarter eagle, which
	is two dollars and fifty cents in gold.  The study of zoology is full
	of surprises.
		-- Ambrose Bierce, &quot;The Devil's Dictionary&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15500.php">Ralph Castain: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Previous message:</strong> <a href="15498.php">Adrian Reber: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>In reply to:</strong> <a href="15498.php">Adrian Reber: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15500.php">Ralph Castain: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
<li><strong>Reply:</strong> <a href="15500.php">Ralph Castain: "Re: [OMPI devel] opal_config_bottom.h question again"</a>
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

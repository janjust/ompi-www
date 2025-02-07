<?
$subject_val = "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 15:42:24 2009" -->
<!-- isoreceived="20090313194224" -->
<!-- sent="Fri, 13 Mar 2009 15:42:14 -0400" -->
<!-- isosent="20090313194214" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h" -->
<!-- id="27BB9DA6-8DEB-40AE-BBDF-969C2E3FF88D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.64.0903131200500.3619_at_aragorn.brc.West.Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 15:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8429.php">Jeff Squyres: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Previous message:</strong> <a href="8427.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8427.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8432.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8432.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had an off-list discussion about this issue with a colleague at PGI.
<br>
<p>I think the issue is this: apparently, &quot;restrict&quot; is different in C  
<br>
than it is in C++.  The Autoconf built-in AC_C_RESTRICT test *only*  
<br>
tests the C compiler.  The particular file you are compiling is C++  
<br>
(components.cc), and the PGI 8.0 compiler only has __restrict in that  
<br>
case.
<br>
<p>I just checked my own setup and found that AC_C_RESTRICT finds  
<br>
&quot;__restrict&quot; for me when I compile with PGI 6.2.5, 7.0.x, and 7.1.x.   
<br>
Hence, it also works for me in C++ (i.e., components.c).
<br>
<p>What does the stdout of configure say for you when it's checking for  
<br>
restrict for you?
<br>
<p><p><p>On Mar 13, 2009, at 3:07 PM, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; Well George's syntax didn't work, either:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;../../../.././ompi/mca/op/op.h&quot;, line 263: error: expected a &quot;)&quot;
</span><br>
<span class="quotelev1">&gt;    typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void  
</span><br>
<span class="quotelev1">&gt; *restrict in1,
</span><br>
<span class="quotelev1">&gt;                                                                         ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;../../../.././ompi/mca/op/op.h&quot;, line 267: warning: parsing  
</span><br>
<span class="quotelev1">&gt; restarts here
</span><br>
<span class="quotelev1">&gt;            after previous syntax error
</span><br>
<span class="quotelev1">&gt;                                                          struct  
</span><br>
<span class="quotelev1">&gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev1">&gt;                                                                                              ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1 error detected in the compilation of &quot;../../../.././ompi/tools/ 
</span><br>
<span class="quotelev1">&gt; ompi_info/components.cc&quot;.
</span><br>
<span class="quotelev1">&gt; make[2]: *** [components.o] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using -c99 as a compiler flag made no difference, using the original  
</span><br>
<span class="quotelev1">&gt; source.
</span><br>
<span class="quotelev1">&gt; Using -c89 as a compiler flag brought in a ton of other errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll be sending PGI a bug report to see what they say.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 12 Mar 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mostyn -- can you try this and see if it works with the PGI 8.0  
</span><br>
<span class="quotelev1">&gt; compiler?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 12, 2009, at 6:20 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Apparently, the PGI compiler (version 8) doesn't recognize  
</span><br>
<span class="quotelev1">&gt; restrict as
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a keyword in a function prototype if the associated argument is not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; named. There is one obvious solution: remove the restrict keyword  
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't think it's the right one.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you try to replace
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void  
</span><br>
<span class="quotelev1">&gt; *restrict,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                      void  
</span><br>
<span class="quotelev1">&gt; *restrict,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                      void  
</span><br>
<span class="quotelev1">&gt; *restrict,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; int *,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi_datatype_t **,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; by typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *restrict in1,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                      void  
</span><br>
<span class="quotelev1">&gt; *restrict
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in2,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                      void  
</span><br>
<span class="quotelev1">&gt; *restrict
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; out, int *,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi_datatype_t **,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   george.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mar 11, 2009, at 15:52 , Mostyn Lewis wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Compiling SVN r20757 with PGI 8.0-4 failed doing ompi_info with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;../../../.././ompi/mca/op/op.h&quot;, line 264: error: duplicate
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; parameter name
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                        void  
</span><br>
<span class="quotelev1">&gt; *restrict,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                              ^
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;../../../.././ompi/mca/op/op.h&quot;, line 265: error: duplicate
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; parameter name
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                        void
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; *restrict, int *,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                              ^
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2 errors detected in the compilation of &quot;../../../.././ompi/tools/
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi_info/components.cc&quot;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make[2]: *** [components.o] Error 2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make[2]: Leaving directory `/tmp/o/openmpi-1.4a1r20757_svn/build/
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi/tools/ompi_info'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Code is:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /*
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; * Typedef for 3-buffer (two input and one output) op functions.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; typedef void (*ompi_op_base_3buff_handler_fn_1_0_0_t)(void  
</span><br>
<span class="quotelev1">&gt; *restrict,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                      void  
</span><br>
<span class="quotelev1">&gt; *restrict,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                      void  
</span><br>
<span class="quotelev1">&gt; *restrict,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; int *,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi_datatype_t **,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                                      struct
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi_op_base_module_1_0_0_t *);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; DM
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="8429.php">Jeff Squyres: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Previous message:</strong> <a href="8427.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8427.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8432.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Reply:</strong> <a href="8432.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
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

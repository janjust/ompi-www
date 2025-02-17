<?
$subject_val = "Re: [OMPI devel] Fix compiler warnings in FT code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 15:11:17 2014" -->
<!-- isoreceived="20140303201117" -->
<!-- sent="Mon, 3 Mar 2014 14:11:17 -0600" -->
<!-- isosent="20140303201117" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fix compiler warnings in FT code" -->
<!-- id="CAANzjE=2XB0LseUZ3NreEyCAfNZpQ-DZKTs27bRsOfamGnD2qQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140303164213.GW10516_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fix compiler warnings in FT code<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 15:11:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14282.php">Rolf vandeVaart: "[OMPI devel] RFC: Add two new verbose outputs to BML layer"</a>
<li><strong>Previous message:</strong> <a href="14280.php">Hjelm, Nathan T: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready	variable"</a>
<li><strong>In reply to:</strong> <a href="14275.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14298.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yea. Those look fine. Thanks!
<br>
<p><p>On Mon, Mar 3, 2014 at 10:42 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I will prepare a patch that moves the parameter initialization somewhere
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; and will not remove it. Do you think the other parts of the patch can be
</span><br>
<span class="quotelev1">&gt; applied (without sstore_stage_select() removal)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 03, 2014 at 10:07:36AM -0600, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt; &gt; It should probably be moved to the component initialization of the sstore
</span><br>
<span class="quotelev2">&gt; &gt; stage component since those parameters are how the user controls where to
</span><br>
<span class="quotelev2">&gt; &gt; store those files. I think there is an MCA registration function that is
</span><br>
<span class="quotelev2">&gt; &gt; called after component initialization - that would be the best spot, but
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev2">&gt; &gt; do not remember how to set it up at the moment.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Mar 3, 2014 at 7:25 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I removed a complete function because it was not used:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../../../../orte/mca/sstore/stage/sstore_stage_component.c: At top
</span><br>
<span class="quotelev3">&gt; &gt; &gt; level:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../../../../orte/mca/sstore/stage/sstore_stage_component.c:77:12:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; warning: 'sstore_stage_select' defined but not used [-Wunused-function]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  static int sstore_stage_select (void)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; And grepping through the code it seems the compiler is right.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Should we keep the code and maybe just #ifdef it out.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mon, Mar 03, 2014 at 07:17:19AM -0600, Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; It looks like you removed a number of sstore stage MCA parameters.
</span><br>
<span class="quotelev1">&gt; Did
</span><br>
<span class="quotelev3">&gt; &gt; &gt; they
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; move somewhere else? or do you have a different way to set those
</span><br>
<span class="quotelev3">&gt; &gt; &gt; parameters?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Other than that it looks good to me.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Mon, Mar 3, 2014 at 5:29 AM, Adrian Reber &lt;adrian_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I have a simple patch which fixes the remaining compiler warnings
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; running with '--with-ft':
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=4dee703a0a2e64972b0c35b7693c11a09f1fbe5f">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=4dee703a0a2e64972b0c35b7693c11a09f1fbe5f</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Does anybody see any problems with this patch?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;                 Adrian
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14281/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14282.php">Rolf vandeVaart: "[OMPI devel] RFC: Add two new verbose outputs to BML layer"</a>
<li><strong>Previous message:</strong> <a href="14280.php">Hjelm, Nathan T: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready	variable"</a>
<li><strong>In reply to:</strong> <a href="14275.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14298.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
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

<?
$subject_val = "Re: [OMPI users] [OMPI devel] Error message improvement";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 07:35:11 2009" -->
<!-- isoreceived="20090909113511" -->
<!-- sent="Wed, 9 Sep 2009 14:35:03 +0300" -->
<!-- isosent="20090909113503" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI devel] Error message improvement" -->
<!-- id="CFDBB903-1775-4577-A991-6B0CE8DA8155_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990909090416o595b3b7fp433790da7d046796_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [OMPI devel] Error message improvement<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 07:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10599.php">Dennis Luxen: "[OMPI users] Messages getting lost during transmission (?)"</a>
<li><strong>Previous message:</strong> <a href="10597.php">Lenny Verkhovsky: "Re: [OMPI users] [OMPI devel] Error message improvement"</a>
<li><strong>In reply to:</strong> <a href="10597.php">Lenny Verkhovsky: "Re: [OMPI users] [OMPI devel] Error message improvement"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
__func__ is what you should use. We take care of having it defined in  
<br>
_all_ cases. If the compiler doesn't support it we define it manually  
<br>
(to __FUNCTION__ or to __FILE__ in the worst case), so it is always  
<br>
available (even if it doesn't contain what one might expect such in  
<br>
the case of __FILE__).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 9, 2009, at 14:16 , Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; does C99 complient compiler is something unusual
</span><br>
<span class="quotelev1">&gt; or is there a policy among OMPI developers/users that prevent me f
</span><br>
<span class="quotelev1">&gt; rom using __func__  instead of hardcoded strings in the code ?
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 9, 2009 at 1:48 PM, Nysal Jan &lt;jnysal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; __FUNCTION__ is not portable.
</span><br>
<span class="quotelev1">&gt; __func__ is but it needs a C99 compliant compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Nysal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 8, 2009 at 9:06 PM, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt; fixed in r21952
</span><br>
<span class="quotelev1">&gt; thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 8, 2009 at 5:08 PM, Arthur Huillet &lt;arthur.huillet_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt; Why not using __FUNCTION__  in all our error messages ???
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds good, this way the function names are always correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Greetings, A. Huillet
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10599.php">Dennis Luxen: "[OMPI users] Messages getting lost during transmission (?)"</a>
<li><strong>Previous message:</strong> <a href="10597.php">Lenny Verkhovsky: "Re: [OMPI users] [OMPI devel] Error message improvement"</a>
<li><strong>In reply to:</strong> <a href="10597.php">Lenny Verkhovsky: "Re: [OMPI users] [OMPI devel] Error message improvement"</a>
<!-- nextthread="start" -->
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

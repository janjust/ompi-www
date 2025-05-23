<?
$subject_val = "Re: [OMPI devel] problem when binding to socket on a single socket node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 12 12:08:17 2010" -->
<!-- isoreceived="20100412160817" -->
<!-- sent="Mon, 12 Apr 2010 10:08:09 -0600" -->
<!-- isosent="20100412160809" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem when binding to socket on a single socket node" -->
<!-- id="B23DCBE3-3F62-498E-9A39-25E6F8AA17DA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BC3315E.4010203_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] problem when binding to socket on a single socket node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-12 12:08:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7738.php">Eugene Loh: "[OMPI devel] bind-to-board [was: problem when binding to socket on a single socket node]"</a>
<li><strong>Previous message:</strong> <a href="7736.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7732.php">Eugene Loh: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7738.php">Eugene Loh: "[OMPI devel] bind-to-board [was: problem when binding to socket on a single socket node]"</a>
<li><strong>Reply:</strong> <a href="7738.php">Eugene Loh: "[OMPI devel] bind-to-board [was: problem when binding to socket on a single socket node]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 12, 2010, at 8:42 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If someone tells us -bind-to-socket, but there is only one socket, then we really cannot bind them to anything. Any check by their code would reveal that they had not, in fact, been bound - raising questions as to whether or not OMPI is performing the request. Our operating standard has been to error out if the user specifies something we cannot do to avoid that kind of confusion. This is what generated the code in the system today.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now I can see an argument that -bind-to-socket with one socket maybe shouldn't generate an error, but that decision then has to get reflected in other code areas as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But first we need to resolve the question: should this scenario return an error or not?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; From the onset of the -bind-to-X functionality, -bind-to-board -byboard for a single-board system would result in binding to everything|nothing -- is the glass completely full or completely empty?  In any case, no error.
</span><br>
<p>Only because we haven't really implemented bind-to-board yet - once we do (should that happen), then it would indeed generate an error.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Consider a single-board, two-socket, quad-core node and these command lines with 1.3.4r22104:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % mpirun -H mynode -n 1 -bycore   -bind-to-core   -report-bindings ./a.out
</span><br>
<span class="quotelev1">&gt; % mpirun -H mynode -n 1 -bysocket -bind-to-socket -report-bindings ./a.out
</span><br>
<span class="quotelev1">&gt; % mpirun -H mynode -n 1 -byboard  -bind-to-board  -report-bindings ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first binds to &quot;cpus 0001&quot;, the second to &quot;socket 0 cpus 000f&quot;, and the third reports no bindings (&quot;bind to everything&quot;) and no errors.
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
<li><strong>Next message:</strong> <a href="7738.php">Eugene Loh: "[OMPI devel] bind-to-board [was: problem when binding to socket on a single socket node]"</a>
<li><strong>Previous message:</strong> <a href="7736.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7732.php">Eugene Loh: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7738.php">Eugene Loh: "[OMPI devel] bind-to-board [was: problem when binding to socket on a single socket node]"</a>
<li><strong>Reply:</strong> <a href="7738.php">Eugene Loh: "[OMPI devel] bind-to-board [was: problem when binding to socket on a single socket node]"</a>
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

<?
$subject_val = "Re: [OMPI devel] problem when binding to socket on a single socket node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 12 10:40:29 2010" -->
<!-- isoreceived="20100412144029" -->
<!-- sent="Mon, 12 Apr 2010 07:42:38 -0700" -->
<!-- isosent="20100412144238" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem when binding to socket on a single socket node" -->
<!-- id="4BC3315E.4010203_at_oracle.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F945A06A-A0AC-46C8-97AA-4CE23C25270F_at_open-mpi.org" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-12 10:42:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7733.php">Nadia Derbey: "Re: [OMPI devel] problem when binding to socket on a single	socket	node"</a>
<li><strong>Previous message:</strong> <a href="7731.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7730.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket	node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7737.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>Reply:</strong> <a href="7737.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;If someone tells us -bind-to-socket, but there is only one socket, then we really cannot bind them to anything. Any check by their code would reveal that they had not, in fact, been bound - raising questions as to whether or not OMPI is performing the request. Our operating standard has been to error out if the user specifies something we cannot do to avoid that kind of confusion. This is what generated the code in the system today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Now I can see an argument that -bind-to-socket with one socket maybe shouldn't generate an error, but that decision then has to get reflected in other code areas as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But first we need to resolve the question: should this scenario return an error or not?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
&nbsp;From the onset of the -bind-to-X functionality, -bind-to-board -byboard 
<br>
for a single-board system would result in binding to everything|nothing 
<br>
-- is the glass completely full or completely empty?  In any case, no error.
<br>
<p>Consider a single-board, two-socket, quad-core node and these command 
<br>
lines with 1.3.4r22104:
<br>
<p>% mpirun -H mynode -n 1 -bycore   -bind-to-core   -report-bindings ./a.out
<br>
% mpirun -H mynode -n 1 -bysocket -bind-to-socket -report-bindings ./a.out
<br>
% mpirun -H mynode -n 1 -byboard  -bind-to-board  -report-bindings ./a.out
<br>
<p>The first binds to &quot;cpus 0001&quot;, the second to &quot;socket 0 cpus 000f&quot;, and 
<br>
the third reports no bindings (&quot;bind to everything&quot;) and no errors.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7733.php">Nadia Derbey: "Re: [OMPI devel] problem when binding to socket on a single	socket	node"</a>
<li><strong>Previous message:</strong> <a href="7731.php">Terry Dontje: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>In reply to:</strong> <a href="7730.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket	node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7737.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
<li><strong>Reply:</strong> <a href="7737.php">Ralph Castain: "Re: [OMPI devel] problem when binding to socket on a single socket node"</a>
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

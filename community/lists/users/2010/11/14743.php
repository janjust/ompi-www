<?
$subject_val = "Re: [OMPI users] Deprecated parameter: plm_rsh_agent";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 12 11:56:48 2010" -->
<!-- isoreceived="20101112165648" -->
<!-- sent="Fri, 12 Nov 2010 11:56:40 -0500" -->
<!-- isosent="20101112165640" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deprecated parameter: plm_rsh_agent" -->
<!-- id="9C4ABC4A-019B-494F-ABDB-DC68FE31BB0E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CD46073.80806_at_penguincomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deprecated parameter: plm_rsh_agent<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-12 11:56:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14744.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Previous message:</strong> <a href="14742.php">Jeff Squyres: "Re: [OMPI users] Infiniband error"</a>
<li><strong>In reply to:</strong> <a href="14703.php">Joshua Bernstein: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ouch; bad FAQ maintainer!
<br>
<p>I've fixed it -- thanks for letting us know, Josh!
<br>
<p><p>On Nov 5, 2010, at 3:52 PM, Joshua Bernstein wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Samuel,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I should have checked ompi_info myself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The FAQ on the website should probably be updated to reflect this function change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Joshua Bernstein
</span><br>
<span class="quotelev1">&gt; Software Development Manager
</span><br>
<span class="quotelev1">&gt; Penguin Computing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Josh,
</span><br>
<span class="quotelev2">&gt;&gt; I -think- the new name is orte_rsh_agent.  At least according to ompi_info.
</span><br>
<span class="quotelev2">&gt;&gt; $ ompi_info -a --parsable | grep orte_rsh_agent
</span><br>
<span class="quotelev2">&gt;&gt; mca:orte:base:param:orte_rsh_agent:value:ssh : rsh
</span><br>
<span class="quotelev2">&gt;&gt; mca:orte:base:param:orte_rsh_agent:data_source:default value
</span><br>
<span class="quotelev2">&gt;&gt; mca:orte:base:param:orte_rsh_agent:status:writable
</span><br>
<span class="quotelev2">&gt;&gt; mca:orte:base:param:orte_rsh_agent:help:The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; mca:orte:base:param:orte_rsh_agent:deprecated:no
</span><br>
<span class="quotelev2">&gt;&gt; mca:orte:base:param:orte_rsh_agent:synonym:name:pls_rsh_agent
</span><br>
<span class="quotelev2">&gt;&gt; mca:orte:base:param:orte_rsh_agent:synonym:name:plm_rsh_agent
</span><br>
<span class="quotelev2">&gt;&gt; mca:plm:base:param:plm_rsh_agent:synonym_of:name:orte_rsh_agent
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 5, 2010, at 12:41 PM, Joshua Bernstein wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When building the examples included with OpenMPI version 1.5 I see a message printed as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A deprecated MCA parameter value was specified in an MCA parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file.  Deprecated MCA parameters should be avoided; they may disappear
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in future releases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Deprecated parameter: plm_rsh_agent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While I know that in pre 1.3.x releases the variable was pls_rsh_agent, plm_rsh_agent worked all the way through at least 1.4.3. What is the new keyword name? I can't seem to find it in the FAQ located here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14744.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Previous message:</strong> <a href="14742.php">Jeff Squyres: "Re: [OMPI users] Infiniband error"</a>
<li><strong>In reply to:</strong> <a href="14703.php">Joshua Bernstein: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
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

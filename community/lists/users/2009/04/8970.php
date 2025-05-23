<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 18 05:00:01 2009" -->
<!-- isoreceived="20090418090001" -->
<!-- sent="Sat, 18 Apr 2009 14:29:56 +0530" -->
<!-- isosent="20090418085956" -->
<!-- name="Ankush Kaul" -->
<!-- email="ankush.rkaul_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="a599d60e0904180159t61f6cfe7t978415fe22207e2c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49E8FE6D.4010503_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Ankush Kaul (<em>ankush.rkaul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-18 04:59:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8971.php">jody: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>Previous message:</strong> <a href="8969.php">Micha Feigin: "[OMPI users] mpiexec seems to be resolving names on server instead of each node"</a>
<li><strong>In reply to:</strong> <a href="8968.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8972.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8972.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8980.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me explain in detail,
<br>
<p>when we had only 2 nodes, 1 master (192.168.67.18) + 1 compute node
<br>
(192.168.45.65)
<br>
my openmpi-default-hostfile looked like*
<br>
192.168.67.18 slots=2
<br>
192.168.45.65 slots=2*
<br>
<p>after this on running the command *miprun /work/Pi* on master node we got
<br>
*
<br>
# root_at_192.168.45.65 password :*
<br>
<p>after entering the password the program ran on both de nodes.
<br>
<p>Now after connecting a second compute node, and editing the hostfile:
<br>
<p>*192.168.67.18 slots=2
<br>
192.168.45.65 slots=2*
<br>
*192.168.67.241 slots=2
<br>
<p>*and then running the command *miprun /work/Pi* on master node we got
<br>
<p># root_at_192.168.45.65's password: root_at_192.168.67.241's password:
<br>
<p>which does not accept the password.
<br>
<p>Although we are trying to implement the passwordless cluster. i wud like to
<br>
know what this problem is occuring?
<br>
<p><p>On Sat, Apr 18, 2009 at 3:40 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ankush
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need to setup passwordless connections with ssh to the node you just
</span><br>
<span class="quotelev1">&gt; added.  You (or somebody else) probably did this already on the first
</span><br>
<span class="quotelev1">&gt; compute node, otherwise the MPI programs wouldn't run
</span><br>
<span class="quotelev1">&gt; across the network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See the very last sentence on this FAQ:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And try this recipe (if you use RSA keys instead of DSA, replace all &quot;dsa&quot;
</span><br>
<span class="quotelev1">&gt; by &quot;rsa&quot;):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.sshkeychain.org/mirrors/SSH-with-Keys-HOWTO/SSH-with-Keys-HOWTO-4.html#ss4.3">http://www.sshkeychain.org/mirrors/SSH-with-Keys-HOWTO/SSH-with-Keys-HOWTO-4.html#ss4.3</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ankush Kaul wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you, i m reading up on de tools u suggested.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am facing another problem, my cluster is working fine with 2 hosts (1
</span><br>
<span class="quotelev2">&gt;&gt; master + 1 compute node) but when i tried 2 add another node (1 master + 2
</span><br>
<span class="quotelev2">&gt;&gt; compute node) its not working. it works fine when i give de command mpirun
</span><br>
<span class="quotelev2">&gt;&gt; -host &lt;hostname&gt; /work/Pi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but when i try to run
</span><br>
<span class="quotelev2">&gt;&gt; mpirun  /work/Pi it gives following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;'s password:
</span><br>
<span class="quotelev2">&gt;&gt; root_at_192.168.67.241 &lt;mailto:root_at_192.168.67.241&gt;'s password:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Permission denied, please try again. &lt;The password i provide is correct&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;'s password:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Permission denied, please try again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; root_at_192.168.45.65 &lt;mailto:root_at_192.168.45.65&gt;'s password:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Permission denied (publickey,gssapi-with-mic,password).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Permission denied, please try again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; root_at_192.168.67.241 &lt;mailto:root_at_192.168.67.241&gt;'s password:
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt; errmgr_hnp.c at line 90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp1.cluster:03503] ERROR: A daemon on node 192.168.45.65 failed to
</span><br>
<span class="quotelev2">&gt;&gt; start as expected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp1.cluster:03503] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp1.cluster:03503] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp1.cluster:03503] ERROR: The daemon exited unexpectedly with status
</span><br>
<span class="quotelev2">&gt;&gt; 255.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ccomp1.cluster:03503] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_module.c at line 1198
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the problem here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to cleanly terminate the daemons for this job. Returned
</span><br>
<span class="quotelev2">&gt;&gt; value Timeout instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Apr 14, 2009 at 7:15 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden] &lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; Eugene.Loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Ankush Kaul wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Finally, after mentioning the hostfiles the cluster is working
</span><br>
<span class="quotelev2">&gt;&gt;        fine. We downloaded few benchmarking softwares but i would like
</span><br>
<span class="quotelev2">&gt;&gt;        to know if there is any GUI based benchmarking software so that
</span><br>
<span class="quotelev2">&gt;&gt;        its easier to demonstrate the working of our cluster while
</span><br>
<span class="quotelev2">&gt;&gt;        displaying our cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    I'm confused what you're looking for here, but thought I'd venture a
</span><br>
<span class="quotelev2">&gt;&gt;    suggestion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    There are GUI-based performance analysis and tracing tools.  E.g.,
</span><br>
<span class="quotelev2">&gt;&gt;    run a program, [[semi-]automatically] collect performance data, run
</span><br>
<span class="quotelev2">&gt;&gt;    a GUI-based analysis tool on the data, visualize what happened on
</span><br>
<span class="quotelev2">&gt;&gt;    your cluster.  Would this suit your purposes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    If so, there are a variety of tools out there you could try.  Some
</span><br>
<span class="quotelev2">&gt;&gt;    are platform-specific or cost money.  Some are widely/freely
</span><br>
<span class="quotelev2">&gt;&gt;    available.  Examples of these tools include Intel Trace Analyzer,
</span><br>
<span class="quotelev2">&gt;&gt;    Jumpshot, Vampir, TAU, etc.  I do know that Sun Studio (Performance
</span><br>
<span class="quotelev2">&gt;&gt;    Analyzer) is available via free download on x86 and SPARC and Linux
</span><br>
<span class="quotelev2">&gt;&gt;    and Solaris and works with OMPI.  Possibly the same with Jumpshot.
</span><br>
<span class="quotelev2">&gt;&gt;     VampirTrace instrumentation is already in OMPI, but then you need
</span><br>
<span class="quotelev2">&gt;&gt;    to figure out the analysis-tool part.  (I think the Vampir GUI tool
</span><br>
<span class="quotelev2">&gt;&gt;    requires a license, but I'm not sure.  Maybe you can convert to TAU,
</span><br>
<span class="quotelev2">&gt;&gt;    which is probably available for free download.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Anyhow, I don't even know if that sort of thing fits your
</span><br>
<span class="quotelev2">&gt;&gt;    requirements.  Just an idea.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8970/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8971.php">jody: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>Previous message:</strong> <a href="8969.php">Micha Feigin: "[OMPI users] mpiexec seems to be resolving names on server instead of each node"</a>
<li><strong>In reply to:</strong> <a href="8968.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8972.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8972.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8980.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
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

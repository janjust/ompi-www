<?
$subject_val = "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 23 11:11:39 2011" -->
<!-- isoreceived="20110423151139" -->
<!-- sent="Sat, 23 Apr 2011 16:11:32 +0100" -->
<!-- isosent="20110423151132" -->
<!-- name="Pablo Lopez Rios" -->
<!-- email="pablomme_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted" -->
<!-- id="4DB2EC24.5040209_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="24C9A1D6-D058-4766-BB56-B5979FA8FD43_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted<br>
<strong>From:</strong> Pablo Lopez Rios (<em>pablomme_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-23 11:11:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16323.php">Ralph Castain: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<li><strong>Previous message:</strong> <a href="16321.php">Pablo Lopez Rios: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<li><strong>In reply to:</strong> <a href="16320.php">Ralph Castain: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16324.php">Ralph Castain: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<li><strong>Reply:</strong> <a href="16324.php">Ralph Castain: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;  &gt;  Pressing Ctrl+C should stop tail -f, and the MPI job
</span><br>
<span class="quotelev2">&gt;  &gt;  should continue.
</span><br>
<p><span class="quotelev1">&gt;  I don't think that is true at all. When you hit ctrl-C,
</span><br>
<span class="quotelev1">&gt;  every process executing in the script receives it. Mpirun
</span><br>
<span class="quotelev1">&gt;  traps the ctrl-c and immediately terminates all running
</span><br>
<span class="quotelev1">&gt;  MPI procs.
</span><br>
<p>By &quot;Ctrl+C should stop tail -f&quot; I mean that this is the
<br>
desired behaviour of the script, not that this is what ought
<br>
to happen in general. My question is how to achieve this
<br>
behaviour, since I'm having trouble working around mpirun
<br>
catching sigint.
<br>
<p>Thanks,
<br>
Pablo
<br>
<p><p><p>On 23/04/11 15:12, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Apr 23, 2011, at 6:20 AM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 23.04.2011 um 04:31 schrieb Pablo Lopez Rios:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm having a bit of a problem with wrapping mpirun in a script. The script needs to run an MPI job in the background and tail -f the output. Pressing Ctrl+C should stop tail -f, and the MPI job should continue.
</span><br>
<span class="quotelev1">&gt; I don't think that is true at all. When you hit ctrl-C, every process executing in the script receives it. Mpirun traps the ctrl-c and immediately terminates all running MPI procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However mpirun seems to detect the SIGINT that was meant for tail, and kills the job immediately. I've tried workarounds involving nohup, disown, trap, subshells (including calling the script from within itself), etc, to no avail.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is that this doesn't happen if I run the command directly instead, without mpirun. Attached is a script that reproduces the problem. It runs a simple counting script in the background which takes 10 seconds to run, and tails the output. If called with &quot;nompi&quot; as first argument, it will simply run bash -c &quot;$SCRIPT&quot;&gt;&amp;  &quot;$out&quot;&amp;, and with &quot;mpi&quot; it will do the same with 'mpirun -np 1' prepended. The output I get is:
</span><br>
<span class="quotelev2">&gt;&gt; what about:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ( trap &quot;&quot; sigint; exec mpiexec ...)&amp;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i.e. replace the subshell with changed interrupt handling with the mpiexec. Well, maybe mpiexec is adjusting it on its own again. This can be checked in /proc/&lt;pid&gt;/status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ./ompi_bug.sh mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ./ompi_bug.sh nompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nompi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cat output.*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 1222 on node pablomme exited on signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nompi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Done
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This convinces me that there is something strange with OpenMPI, since I expect no difference in signal handling when running a simple command with or without mpirun in the middle.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've tried looking for options to change this behaviour, but I don't seem to find any. Is there one, preferably in the form of an environment variable? Or is this a bug?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using OpenMPI v1.4.3 as distributed with Ubuntu 11.04, and also v1.2.8 as distributed with OpenSUSE 11.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pablo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ompi_bug.sh.gz&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16323.php">Ralph Castain: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<li><strong>Previous message:</strong> <a href="16321.php">Pablo Lopez Rios: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<li><strong>In reply to:</strong> <a href="16320.php">Ralph Castain: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16324.php">Ralph Castain: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<li><strong>Reply:</strong> <a href="16324.php">Ralph Castain: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
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

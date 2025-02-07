<?
$subject_val = "Re: [OMPI devel] Add child to another parent.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 06:33:35 2011" -->
<!-- isoreceived="20110405103335" -->
<!-- sent="Tue, 5 Apr 2011 12:33:28 +0200" -->
<!-- isosent="20110405103328" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Add child to another parent." -->
<!-- id="BANLkTimBZo69Y3oBVTOh64yWG9qX-UfM0g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=rqf2cKoRtjvxujpvT-NabiMRfPxcA52pcA76y_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Add child to another parent.<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-05 06:33:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9159.php">Eugene Loh: "[OMPI devel] orterun hanging"</a>
<li><strong>Previous message:</strong> <a href="9157.php">Joshua Hursey: "Re: [OMPI devel] Fwd: [devel-core] Open MPI Developers Meeting"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/03/9155.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9160.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Reply:</strong> <a href="9160.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph and @ll.
<br>
<p>Ralph, by following your recomendations i've already restart the process in
<br>
another node from his checkpoint. But now i'm having a small problem with
<br>
the oob_tcp. There is the output:
<br>
<p>odls_base_default_fns:SETEANDO BLCR CONTEXT
<br>
CKPT-FILE: /tmp/radic/1/ompi_blcr_context.13374
<br>
ODLS_BASE_DEFAULT_FNS: REINICIO PROCESO EN [[34224,0],2]
<br>
[1,1]&lt;stdout&gt;:INICIEI O BROADCAST (2)
<br>
[1,1]&lt;stdout&gt;:[clus5:13374] snapc:single:app do_checkpoint: RESTART (3)
<br>
*[1,1]&lt;stdout&gt;:[clus5:13374] mca_oob_tcp_init: creating listen socket*
<br>
*[1,1]&lt;stdout&gt;:[clus5:13374] mca_oob_tcp_init: unable to create IPv4 listen
<br>
socket: Unable to open a TCP socket for out-of-band communications*
<br>
[1,1]&lt;stdout&gt;:[clus5:13374] App) notify_response: Waiting for final
<br>
handshake*.*
<br>
[1,1]&lt;stdout&gt;:[clus5:13374] App) update_status: Update checkpoint status
<br>
(13, /tmp/radic/1) for [[34224,1],1]
<br>
[1,0]&lt;stdout&gt;:INICIEI O BROADCAST (6)
<br>
[1,0]&lt;stdout&gt;:FINALIZEI O BROADCAST (6)
<br>
[1,0]&lt;stdout&gt;:INICIEI O BROADCAST
<br>
[1,3]&lt;stdout&gt;:INICIEI O BROADCAST (6)
<br>
[1,3]&lt;stdout&gt;:FINALIZEI O BROADCAST (6)
<br>
[1,3]&lt;stdout&gt;:INICIEI O BROADCAST
<br>
*[1,1]&lt;stdout&gt;:[clus5:13374] [[34224,1],1] errmgr:app: job [34224,0]
<br>
reported state COMMUNICATION FAILURE for proc [[34224,0],1] state
<br>
COMMUNICATION FAILURE exit_code 1*
<br>
*[1,1]&lt;stdout&gt;:[clus5:13374] [[34224,1],1] routed:cm: Connection to lifeline
<br>
[[34224,0],1] lost*
<br>
<p><p>I'm thinking that this error ocurrs because the process want to create the
<br>
socket using the port that was previously assigned to it. So, if i want to
<br>
restart it using another port or something how the other daemons and process
<br>
will find out about this? Is this a good choice?
<br>
<p>Best regards.
<br>
<p>Hugo Meyer
<br>
<p>2011/3/31 Hugo Meyer &lt;meyer.hugo_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Ok Ralph.
</span><br>
<span class="quotelev1">&gt; Thanks a lot, i will resend this message with a new subject.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/3/31 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry - should have included the devel list when I sent this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 30, 2011, at 6:11 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not the expert on this area - Josh is, so I'll defer to him. I did
</span><br>
<span class="quotelev2">&gt;&gt; take a quick glance at the sstore framework, though, and it looks like there
</span><br>
<span class="quotelev2">&gt;&gt; are some params you could set that might help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ompi_info --param sstore all&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; should tell you what's available. Also, note that Josh created a man page
</span><br>
<span class="quotelev2">&gt;&gt; to explain how sstore works. It's in section 7, looks like &quot;man orte_sstore&quot;
</span><br>
<span class="quotelev2">&gt;&gt; should get it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 30, 2011, at 3:09 PM, Hugo Meyer wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm working in the launch code to handle my checkpoints, but i'm a little
</span><br>
<span class="quotelev2">&gt;&gt; stuck in how to set the path to my checkpoint and the executable
</span><br>
<span class="quotelev2">&gt;&gt; (ompi_blcr_context.PID). I take a look at the code in
</span><br>
<span class="quotelev2">&gt;&gt; odls_base_default_fns.c and this piece of code took my attention:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_ENABLE_FT_CR == 1
</span><br>
<span class="quotelev2">&gt;&gt;             /*
</span><br>
<span class="quotelev2">&gt;&gt;              * OPAL CRS components need the opportunity to take action
</span><br>
<span class="quotelev2">&gt;&gt; before a process
</span><br>
<span class="quotelev2">&gt;&gt;              * is forked.
</span><br>
<span class="quotelev2">&gt;&gt;              * Needs access to:
</span><br>
<span class="quotelev2">&gt;&gt;              *   - Environment
</span><br>
<span class="quotelev2">&gt;&gt;              *   - Rank/ORTE Name
</span><br>
<span class="quotelev2">&gt;&gt;              *   - Binary to exec
</span><br>
<span class="quotelev2">&gt;&gt;              */
</span><br>
<span class="quotelev2">&gt;&gt;             if( NULL != opal_crs.crs_prelaunch ) {
</span><br>
<span class="quotelev2">&gt;&gt;                 if( OPAL_SUCCESS != (rc =
</span><br>
<span class="quotelev2">&gt;&gt; opal_crs.crs_prelaunch(child-&gt;name-&gt;vpid,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orte_sstore_base_prelaunch_location,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &amp;(app-&gt;app),
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &amp;(app-&gt;cwd),
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &amp;(app-&gt;argv),
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &amp;(app-&gt;env) ) ) ) {
</span><br>
<span class="quotelev2">&gt;&gt;                     ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt;                     goto CLEANUP;
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But i didn't find out how to set orte_sstore_base_prelaunch_location, i
</span><br>
<span class="quotelev2">&gt;&gt; now that initially this is set in the sstore_base_open. For example, as i'm
</span><br>
<span class="quotelev2">&gt;&gt; transfering my checkpoint from one node to another, i store the checkpoint
</span><br>
<span class="quotelev2">&gt;&gt; that has to be restore in /tmp/1/ and it has a name
</span><br>
<span class="quotelev2">&gt;&gt; like ompi_blcr_context.PID.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any function that i didn't see that allows me to do this? I'm
</span><br>
<span class="quotelev2">&gt;&gt; asking this because I do not want to change the signature of the
</span><br>
<span class="quotelev2">&gt;&gt; functions to pass the details of the checkpoint and the PID.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hugo Meyer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2011/3/30 Hugo Meyer &lt;meyer.hugo_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Ralph.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have finished the (a) point, and now its working, now i have to work to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; relaunch from my checkpoint as you said.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hugo Meyer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2011/3/29 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  The resilient mapper -only- works on procs being restarted - it cannot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; map a job for its initial launch. You shouldn't set any rmaps flag and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; things will work correctly - the default round-robin mapper will map the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; initial launch, and then the resilient mapper will handle restarts.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 29, 2011, at 5:18 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm having a problem when i try to select the rmaps resilient to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; used:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/hmeyer/desarrollo/ompi-code/binarios/bin/mpirun -v -np 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --hostfile ../hostfile --bynode -mca rmaps resilient -mca vprotocol receiver
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca plm rsh -mca routed cm ./coll 6 10 2&gt;out.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get this as error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [clus9:25568] [[53334,0],0] hostfile: checking hostfile ../hostfile for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your job failed to map. Either no mapper was available, or none
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of the available mappers was able to perform the requested
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mapping operation. This can happen if you request a map type
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (e.g., loadbalance) and the corresponding mapper was not built.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [clus9:25568] errmgr:hnp:update_state() [[53334,0],0]) ------- App.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process state updated for process NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [clus9:25568] [[53334,0],0] errmgr:hnp: job [53334,0] reported state
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NEVER LAUNCHED for proc NULL state UNDEFINED pid 0 exit_code 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [clus9:25568] [[53334,0],0] errmgr:hnp: job [53334,0] reported state
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NEVER LAUNCHED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [clus9:25568] [[53334,0],0] errmgr:hnp: abort called on job [53334,0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with status 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there a flag that i'm not turning on? or a component that i should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have selected?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks again.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hugo Meyer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2011/3/26 Hugo Meyer &lt;meyer.hugo_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ok Ralph.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks a lot for your help, i will do as you said and then let you know
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; how it goes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best Regards.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hugo Meyer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2011/3/25 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mar 25, 2011, at 10:48 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From what you've described before, I suspect all you'll need to do is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; add some code in orte/mca/odls/base/odls_base_default_fns.c that (a) checks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to see if a process in the launch message is being relocated (the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; construct_child_list code does that already), and then (b) sends the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; required info to all local child processes so they can take appropriate
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; action.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Failure detection, re-launch, etc. have all been taken care of for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I looked at the code that you mentioned me and i realize that i have
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; two possible options, that i'm going to share with you to know your opinion.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; First of all i will let you know my actual situation with the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; implementation. As i'm working in a Fault Tolerant system, but using
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; uncoordinated checkpoint i'm taking checkpoints of all my process at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; different time and storing them on the machine where there are residing, but
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; i also send this checkpoints to another node (lets call it protector), so if
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this node fails his process should be restarted in the protector that have
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; his checkpoints.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Right now i'm detecting the failure of a process and i know where this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; process should be restarted, and also i have the checkpoint in the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; protector. And i also have the child information of course.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So, my options are:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *First Option*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I detect the failure, and then i use
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; orte_errmgr_hnp_base_global_update_state()  with some modifications and the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hnp_relocate but changing the spawning to make a restart from a checkpoint,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; i suposse that using this, the migration of the process to another node will
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; be updated and everyone will know it, because is the hnp who is going to do
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this (is this ok?).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This is the option I would use. The other one is much, much more work.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; In this option, you only have to:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (a) modify the mapper so you can specify the location of the proc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; being restarted. The resilient mapper module will be handling the restart -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; if you look at orte/mca/rmaps/resilient/rmaps_resilient.c, you can see the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; code doing the &quot;replacement&quot; and modify accordingly.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (b) add any required info about your checkpoint to the launch message.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This gets created in orte/mca/odls/base/odls_base_default_fns.c, the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;get_add_procs_data&quot; function (at the top of the file).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (c) modify the launch code to handle your checkpoint, if required -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; see the file in (b), the &quot;construct_child&quot; and &quot;launch&quot; functions.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *Second Option*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Modify one of the spawn variations(probably the remote_spawn from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rsh) in the PLM framework and then use the orted_comm to command a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; remote_spawn in the protector, but i don't know here how to update the info
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; so everyone knows about the change or how this is managed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I might be very wrong in what I said, my apologies if so.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks a lot for all the help.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Best regards.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hugo Meyer
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9158/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9159.php">Eugene Loh: "[OMPI devel] orterun hanging"</a>
<li><strong>Previous message:</strong> <a href="9157.php">Joshua Hursey: "Re: [OMPI devel] Fwd: [devel-core] Open MPI Developers Meeting"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/03/9155.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9160.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Reply:</strong> <a href="9160.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
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

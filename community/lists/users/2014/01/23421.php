<?
$subject_val = "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 19 20:01:49 2014" -->
<!-- isoreceived="20140120010149" -->
<!-- sent="Mon, 20 Jan 2014 10:01:23 +0900" -->
<!-- isosent="20140120010123" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2" -->
<!-- id="OFC99598EC.B3FEFEC8-ON49257C66.000324A1-49257C66.0005A6CB_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F78775DB-D9C2-46BE-BA7F-15541CCBCD1A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20hosfile%20issue%20of%20openmpi-1.7.4rc2"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-01-19 20:01:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23422.php">Syed Ahsan Ali: "Re: [OMPI users] Error message related to infiniband"</a>
<li><strong>Previous message:</strong> <a href="23420.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on mpi_finalize and	consumes all system resources"</a>
<li><strong>In reply to:</strong> <a href="23415.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I confirmed that it worked quite well for my purpose.
<br>
Thank you very much.
<br>
<p>I would point out just a small thing. Since the debug
<br>
information in the rank-file block is useful even
<br>
when a host is initially detected, OPAL_OUTPUT_VERBOSE
<br>
in the line 302 should be out of the else-clause as well.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p>--- orte/util/hostfile/hostfile.rhc.c   2014-01-20 08:42:40.000000000 +0900
<br>
+++ orte/util/hostfile/hostfile.c       2014-01-20 08:51:26.000000000 +0900
<br>
@@ -299,14 +299,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* add a slot */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-&gt;slots++;
<br>
-            OPAL_OUTPUT_VERBOSE((1,
<br>
orte_ras_base_framework.framework_output,
<br>
-                                 &quot;%s hostfile: node %s slots %d&quot;,
<br>
-                                 ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
<br>
node-&gt;name, node-&gt;slots));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* mark the slots as &quot;given&quot; since we take them as being the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* number specified via the rankfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-&gt;slots_given = true;
<br>
+        OPAL_OUTPUT_VERBOSE((1, orte_ras_base_framework.framework_output,
<br>
+                             &quot;%s hostfile: node %s slots %d&quot;,
<br>
+                             ORTE_NAME_PRINT(ORTE_PROC_MY_NAME), node-&gt;
<br>
name, node-&gt;slots));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* skip to end of line */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (!orte_util_hostfile_done &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_HOSTFILE_NEWLINE != token) {
<br>
<p><span class="quotelev1">&gt; On Jan 19, 2014, at 1:36 AM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for your fix. I will try it tomorrow.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Before that, although I could not understand everything,
</span><br>
<span class="quotelev2">&gt; &gt; let me ask some questions about the new hostfile.c.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. The line 244-248 is included in else-clause, which might cause
</span><br>
<span class="quotelev2">&gt; &gt; memory leak(it seems to me). Should it be out of the clause?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 244            if (NULL != node_alias) {
</span><br>
<span class="quotelev2">&gt; &gt; 245                /* add to list of aliases for this node - only add
</span><br>
if
<br>
<span class="quotelev2">&gt; &gt; unique */
</span><br>
<span class="quotelev2">&gt; &gt; 246                opal_argv_append_unique_nosize(&amp;node-&gt;alias,
</span><br>
node_alias,
<br>
<span class="quotelev2">&gt; &gt; false);
</span><br>
<span class="quotelev2">&gt; &gt; 247                free(node_alias);
</span><br>
<span class="quotelev2">&gt; &gt; 248            }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, although it shouldn't ever actually be true unless the node was
</span><br>
previously seen anyway
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. For the similar reason, should the line 306-314 be out of
</span><br>
else-clause?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Those lines actually shouldn't exist as we don't define an alias in that
</span><br>
code block, so node_alias is always NULL
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. I think that node-&gt;slots_given of hosts detected through rank-file
</span><br>
<span class="quotelev2">&gt; &gt; should
</span><br>
<span class="quotelev2">&gt; &gt; always be true to avoid override by orte_set_dafault_slots. Should the
</span><br>
line
<br>
<span class="quotelev2">&gt; &gt; 305
</span><br>
<span class="quotelev2">&gt; &gt; be out of else-clause as well?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 305            node-&gt;slots_given = true;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes - thanks, it was meant to be outside the clause
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I believe I now have this working correctly on the trunk and setup for
</span><br>
<span class="quotelev2">&gt; &gt; 1.7.4. If you get a chance, please give it a try and confirm it solves
</span><br>
the
<br>
<span class="quotelev2">&gt; &gt; problem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 17, 2014, at 2:16 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sorry for delay - I understood and was just occupied with something
</span><br>
<span class="quotelev2">&gt; &gt; else for a while. Thanks for the follow-up. I'm looking at the issue
</span><br>
and
<br>
<span class="quotelev2">&gt; &gt; trying to decipher the right solution.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Jan 17, 2014, at 2:00 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I'm sorry that my explanation was not enough ...
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; This is the summary of my situation:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1. I create a hostfile as shown below manually.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 2. I use mpirun to start the job without Torque, which means I'm
</span><br>
<span class="quotelev2">&gt; &gt; running in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; an un-managed environment.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 3. Firstly, ORTE detects 8 slots on each host(maybe in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &quot;orte_ras_base_allocate&quot;).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  node05: slots=8 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  node06: slots=8 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 4. Then, the code I identified is resetting the slot counts.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  node05: slots=1 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  node06: slots=1 max_slots=0 slots_inuse=0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 5. Therefore, ORTE believes that there is only one slot on each
</span><br>
host.
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; No, I didn't use Torque this time.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; This issue is caused only when it is not in the managed
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; environment - namely, orte_managed_allocation is false
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (and orte_set_slots is NULL).
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Under the torque management, it works fine.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I hope you can understand the situation.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I'm sorry, but I'm really confused, so let me try to understand
</span><br>
the
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; situation.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; You use Torque to get an allocation, so you are running in a
</span><br>
managed
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; environment.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; You then use mpirun to start the job, but pass it a hostfile as
</span><br>
<span class="quotelev2">&gt; &gt; shown
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; below.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Somehow, ORTE believes that there is only one slot on each host,
</span><br>
and
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; believe the code you've identified is resetting the slot counts.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Is that a correct summary of the situation?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Jan 16, 2014, at 4:00 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I encountered the hostfile issue again where slots are counted by
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; listing the node multiple times. This should be fixed by r29765
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; - Fix hostfile parsing for the case where RMs count slots ....
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; The difference is using RM or not. At that time, I executed
</span><br>
mpirun
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; through
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Torque manager. This time I executed it directly from command
</span><br>
line
<br>
<span class="quotelev2">&gt; &gt; as
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; shown at the bottom, where node05,06 has 8 cores.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Then, I checked source files arroud it and found that the line
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 151-160
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; plm_base_launch_support.c caused this issue. As node-&gt;slots is
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; already
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; counted in hostfile.c @ r29765 even when node-&gt;slots_given is
</span><br>
<span class="quotelev2">&gt; &gt; false,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I think this part of plm_base_launch_support.c would be
</span><br>
<span class="quotelev2">&gt; &gt; unnecesarry.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; orte/mca/plm/base/plm_base_launch_support.c @ 30189:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 151             } else {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 152                 /* set any non-specified slot counts to 1 */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 153                 for (i=0; i &lt; orte_node_pool-&gt;size; i++) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 154                     if (NULL == (node =
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; (orte_node_t*)opal_pointer_array_get_item(orte_node_pool, i))) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 155                         continue;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 156                     }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 157                     if (!node-&gt;slots_given) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 158                         node-&gt;slots = 1;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 159                     }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 160                 }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 161             }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Removing this part, it works very well, where the function of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_set_default_slots is still alive. I think this would be
</span><br>
better
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; the compatible extention of openmpi-1.7.3.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_manage work]$ cat pbs_hosts
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [mishima_at_manage work]$ mpirun -np 4 -hostfile pbs_hosts
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -cpus-per-proc
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; -report-bindings myprog
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:22287] MCW rank 2 bound to socket 1[core 4[hwt
</span><br>
0]],
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 1[core 5[hwt 0]], socket 1[core 6[hwt 0]], so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cket 1[core 7[hwt 0]]: [./././.][B/B/B/B]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:22287] MCW rank 3 is not bound (or bound to all
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; available
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:22287] MCW rank 0 bound to socket 0[core 0[hwt
</span><br>
0]],
<br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; cket 0[core 3[hwt 0]]: [B/B/B/B][./././.]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; [node05.cluster:22287] MCW rank 1 is not bound (or bound to all
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; available
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; processors)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 0 of 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 1 of 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 3 of 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from process 2 of 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
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
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23422.php">Syed Ahsan Ali: "Re: [OMPI users] Error message related to infiniband"</a>
<li><strong>Previous message:</strong> <a href="23420.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on mpi_finalize and	consumes all system resources"</a>
<li><strong>In reply to:</strong> <a href="23415.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
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

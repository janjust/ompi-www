<?
$subject_val = "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 12:12:06 2016" -->
<!-- isoreceived="20160706161206" -->
<!-- sent="Wed, 6 Jul 2016 18:03:14 +0200" -->
<!-- isosent="20160706160314" -->
<!-- name="Gundram Leifert" -->
<!-- email="gundram.leifert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Java-OpenMPI returns with SIGSEGV" -->
<!-- id="577D2BC2.6010806_at_uni-rostock.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5sqjPyXdsGyV6EWtRhLsREa3MS=-m61bi0xKu2KG6-e5g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Java-OpenMPI returns with SIGSEGV<br>
<strong>From:</strong> Gundram Leifert (<em>gundram.leifert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-06 12:03:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29589.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="29587.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>In reply to:</strong> <a href="29587.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29589.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Reply:</strong> <a href="29589.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Giles,
<br>
<p>thank you for your hints! I did 3 changes, unfortunately the same error 
<br>
occures:
<br>
<p>update ompi:
<br>
commit ae8444682f0a7aa158caea08800542ce9874455e
<br>
Author: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Date:   Tue Jul 5 20:07:16 2016 -0700
<br>
<p>update java:
<br>
java version &quot;1.8.0_92&quot;
<br>
Java(TM) SE Runtime Environment (build 1.8.0_92-b14)
<br>
Java HotSpot(TM) Server VM (build 25.92-b14, mixed mode)
<br>
<p>delete hashcode-lines.
<br>
<p>Now I get this error message - to 100%, after different number of 
<br>
iterations (15-300):
<br>
<p>&nbsp;&nbsp;0/ 3:length = 100000000
<br>
&nbsp;&nbsp;0/ 3:bcast length done (length = 100000000)
<br>
&nbsp;&nbsp;1/ 3:bcast length done (length = 100000000)
<br>
&nbsp;&nbsp;2/ 3:bcast length done (length = 100000000)
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0x00002b3d022fcd24, pid=16578, tid=0x00002b3d29716700
<br>
#
<br>
# JRE version: Java(TM) SE Runtime Environment (8.0_92-b14) (build 
<br>
1.8.0_92-b14)
<br>
# Java VM: Java HotSpot(TM) 64-Bit Server VM (25.92-b14 mixed mode 
<br>
linux-amd64 compressed oops)
<br>
# Problematic frame:
<br>
# V  [libjvm.so+0x414d24] ciEnv::get_field_by_index(ciInstanceKlass*, 
<br>
int)+0x94
<br>
#
<br>
# Failed to write core dump. Core dumps have been disabled. To enable 
<br>
core dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /home/gl069/ompi/bin/executor/hs_err_pid16578.log
<br>
#
<br>
# Compiler replay data is saved as:
<br>
# /home/gl069/ompi/bin/executor/replay_pid16578.log
<br>
#
<br>
# If you would like to submit a bug report, please visit:
<br>
#   <a href="http://bugreport.java.com/bugreport/crash.jsp">http://bugreport.java.com/bugreport/crash.jsp</a>
<br>
#
<br>
[titan01:16578] *** Process received signal ***
<br>
[titan01:16578] Signal: Aborted (6)
<br>
[titan01:16578] Signal code:  (-6)
<br>
[titan01:16578] [ 0] /usr/lib64/libpthread.so.0(+0xf100)[0x2b3d01500100]
<br>
[titan01:16578] [ 1] /usr/lib64/libc.so.6(gsignal+0x37)[0x2b3d01b5c5f7]
<br>
[titan01:16578] [ 2] /usr/lib64/libc.so.6(abort+0x148)[0x2b3d01b5dce8]
<br>
[titan01:16578] [ 3] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x91e605)[0x2b3d02806605]
<br>
[titan01:16578] [ 4] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0xabda63)[0x2b3d029a5a63]
<br>
[titan01:16578] [ 5] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(JVM_handle_linux_signal+0x14f)[0x2b3d0280be2f]
<br>
[titan01:16578] [ 6] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x91a5c3)[0x2b3d028025c3]
<br>
[titan01:16578] [ 7] /usr/lib64/libc.so.6(+0x35670)[0x2b3d01b5c670]
<br>
[titan01:16578] [ 8] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x414d24)[0x2b3d022fcd24]
<br>
[titan01:16578] [ 9] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x43c5ae)[0x2b3d023245ae]
<br>
[titan01:16578] [10] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x369ade)[0x2b3d02251ade]
<br>
[titan01:16578] [11] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36eda0)[0x2b3d02256da0]
<br>
[titan01:16578] [12] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x37091b)[0x2b3d0225891b]
<br>
[titan01:16578] [13] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x3712b6)[0x2b3d022592b6]
<br>
[titan01:16578] [14] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36d2cf)[0x2b3d022552cf]
<br>
[titan01:16578] [15] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36e412)[0x2b3d02256412]
<br>
[titan01:16578] [16] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36ed8d)[0x2b3d02256d8d]
<br>
[titan01:16578] [17] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x37091b)[0x2b3d0225891b]
<br>
[titan01:16578] [18] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x3712b6)[0x2b3d022592b6]
<br>
[titan01:16578] [19] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36d2cf)[0x2b3d022552cf]
<br>
[titan01:16578] [20] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36e412)[0x2b3d02256412]
<br>
[titan01:16578] [21] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x36ed8d)[0x2b3d02256d8d]
<br>
[titan01:16578] [22] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x3708c2)[0x2b3d022588c2]
<br>
[titan01:16578] [23] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x3724e7)[0x2b3d0225a4e7]
<br>
[titan01:16578] [24] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x37a817)[0x2b3d02262817]
<br>
[titan01:16578] [25] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x37a92f)[0x2b3d0226292f]
<br>
[titan01:16578] [26] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x358edb)[0x2b3d02240edb]
<br>
[titan01:16578] [27] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x35929e)[0x2b3d0224129e]
<br>
[titan01:16578] [28] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x3593ce)[0x2b3d022413ce]
<br>
[titan01:16578] [29] 
<br>
/home/gl069/bin/jdk1.8.0_92/jre/lib/amd64/server/libjvm.so(+0x35973e)[0x2b3d0224173e]
<br>
[titan01:16578] *** End of error message ***
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 2 with PID 0 on node titan01 exited on 
<br>
signal 6 (Aborted).
<br>
--------------------------------------------------------------------------
<br>
<p>I don't know if it is a  problem of java or ompi - but the last years, 
<br>
java worked with no problems on my machine...
<br>
<p>Thank you for your tips in advance!
<br>
Gundram
<br>
<p>On 07/06/2016 03:10 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Note a race condition in MPI_Init has been fixed yesterday in the master.
</span><br>
<span class="quotelev1">&gt; can you please update your OpenMPI and try again ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hopefully the hang will disappear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you reproduce the crash with a simpler (and ideally deterministic) 
</span><br>
<span class="quotelev1">&gt; version of your program.
</span><br>
<span class="quotelev1">&gt; the crash occurs in hashcode, and this makes little sense to me. can 
</span><br>
<span class="quotelev1">&gt; you also update your jdk ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday, July 6, 2016, Gundram Leifert 
</span><br>
<span class="quotelev1">&gt; &lt;gundram.leifert_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gundram.leifert_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello Jason,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     thanks for your response! I thing it is another problem. I try to
</span><br>
<span class="quotelev1">&gt;     send 100MB bytes. So there are not many tries (between 10 and 30).
</span><br>
<span class="quotelev1">&gt;     I realized that the execution of this code can result 3 different
</span><br>
<span class="quotelev1">&gt;     errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1. most often the posted error message occures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2. in &lt;10% the cases i have a live lock. I can see 3
</span><br>
<span class="quotelev1">&gt;     java-processes, one with 200% and two with 100% processor
</span><br>
<span class="quotelev1">&gt;     utilization. After ~15 minutes without new system outputs this
</span><br>
<span class="quotelev1">&gt;     error occurs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [thread 47499823949568 also had an error]
</span><br>
<span class="quotelev1">&gt;     # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     #  Internal Error (safepoint.cpp:317), pid=24256, tid=47500347131648
</span><br>
<span class="quotelev1">&gt;     #  guarantee(PageArmed == 0) failed: invariant
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     # JRE version: 7.0_25-b15
</span><br>
<span class="quotelev1">&gt;     # Java VM: Java HotSpot(TM) 64-Bit Server VM (23.25-b01 mixed mode
</span><br>
<span class="quotelev1">&gt;     linux-amd64 compressed oops)
</span><br>
<span class="quotelev1">&gt;     # Failed to write core dump. Core dumps have been disabled. To
</span><br>
<span class="quotelev1">&gt;     enable core dumping, try &quot;ulimit -c unlimited&quot; before starting
</span><br>
<span class="quotelev1">&gt;     Java again
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     # An error report file with more information is saved as:
</span><br>
<span class="quotelev1">&gt;     # /home/gl069/ompi/bin/executor/hs_err_pid24256.log
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev1">&gt;     # <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev1">&gt;     #
</span><br>
<span class="quotelev1">&gt;     [titan01:24256] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;     [titan01:24256] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt;     [titan01:24256] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt;     [titan01:24256] [ 0]
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/libpthread.so.0(+0xf100)[0x2b336a324100]
</span><br>
<span class="quotelev1">&gt;     [titan01:24256] [ 1]
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/libc.so.6(gsignal+0x37)[0x2b336a9815f7]
</span><br>
<span class="quotelev1">&gt;     [titan01:24256] [ 2] /usr/lib64/libc.so.6(abort+0x148)[0x2b336a982ce8]
</span><br>
<span class="quotelev1">&gt;     [titan01:24256] [ 3]
</span><br>
<span class="quotelev1">&gt;     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x742ac5)[0x2b336b44fac5]
</span><br>
<span class="quotelev1">&gt;     [titan01:24256] [ 4]
</span><br>
<span class="quotelev1">&gt;     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a2137)[0x2b336b5af137]
</span><br>
<span class="quotelev1">&gt;     [titan01:24256] [ 5]
</span><br>
<span class="quotelev1">&gt;     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x407262)[0x2b336b114262]
</span><br>
<span class="quotelev1">&gt;     [titan01:24256] [ 6]
</span><br>
<span class="quotelev1">&gt;     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x7c6c34)[0x2b336b4d3c34]
</span><br>
<span class="quotelev1">&gt;     [titan01:24256] [ 7]
</span><br>
<span class="quotelev1">&gt;     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a9c17)[0x2b336b5b6c17]
</span><br>
<span class="quotelev1">&gt;     [titan01:24256] [ 8]
</span><br>
<span class="quotelev1">&gt;     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8aa2c0)[0x2b336b5b72c0]
</span><br>
<span class="quotelev1">&gt;     [titan01:24256] [ 9]
</span><br>
<span class="quotelev1">&gt;     /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x744270)[0x2b336b451270]
</span><br>
<span class="quotelev1">&gt;     [titan01:24256] [10]
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/libpthread.so.0(+0x7dc5)[0x2b336a31cdc5]
</span><br>
<span class="quotelev1">&gt;     [titan01:24256] [11] /usr/lib64/libc.so.6(clone+0x6d)[0x2b336aa4228d]
</span><br>
<span class="quotelev1">&gt;     [titan01:24256] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;     -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt;     a non-zero exit code. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt;     -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     mpirun noticed that process rank 0 with PID 0 on node titan01
</span><br>
<span class="quotelev1">&gt;     exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     3. in &lt;10% the cases i have a dead lock while MPI.init. This stays
</span><br>
<span class="quotelev1">&gt;     for more than 15 minutes without returning with an error message...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Can I enable some debug-flags to see what happens on C / OpenMPI side?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks in advance for your help!
</span><br>
<span class="quotelev1">&gt;     Gundram Leifert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 07/05/2016 06:05 PM, Jason Maldonis wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     After reading your thread looks like it may be related to an
</span><br>
<span class="quotelev2">&gt;&gt;     issue I had a few weeks ago (I'm a novice though). Maybe my
</span><br>
<span class="quotelev2">&gt;&gt;     thread will be of help:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://www.open-mpi.org/community/lists/users/2016/06/29425.php">https://www.open-mpi.org/community/lists/users/2016/06/29425.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     When you say &quot;After a specific number of repetitions the process
</span><br>
<span class="quotelev2">&gt;&gt;     either hangs up or returns with a SIGSEGV.&quot;  does you mean that a
</span><br>
<span class="quotelev2">&gt;&gt;     single call hangs, or that at some point during the for loop a
</span><br>
<span class="quotelev2">&gt;&gt;     call hangs? If you mean the latter, then it might relate to my
</span><br>
<span class="quotelev2">&gt;&gt;     issue. Otherwise my thread probably won't be helpful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Jason Maldonis
</span><br>
<span class="quotelev2">&gt;&gt;     Research Assistant of Professor Paul Voyles
</span><br>
<span class="quotelev2">&gt;&gt;     Materials Science Grad Student
</span><br>
<span class="quotelev2">&gt;&gt;     University of Wisconsin, Madison
</span><br>
<span class="quotelev2">&gt;&gt;     1509 University Ave, Rm M142
</span><br>
<span class="quotelev2">&gt;&gt;     Madison, WI 53706
</span><br>
<span class="quotelev2">&gt;&gt;     maldonis_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','maldonis_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     608-295-5532
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Tue, Jul 5, 2016 at 9:58 AM, Gundram Leifert
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;gundram.leifert_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','gundram.leifert_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I try to send many byte-arrays via broadcast. After a
</span><br>
<span class="quotelev2">&gt;&gt;         specific number of repetitions the process either hangs up or
</span><br>
<span class="quotelev2">&gt;&gt;         returns with a SIGSEGV. Does any one can help me solving the
</span><br>
<span class="quotelev2">&gt;&gt;         problem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         ########## The code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         import java.util.Random;
</span><br>
<span class="quotelev2">&gt;&gt;         import mpi.*;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         public class TestSendBigFiles {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             public static void log(String msg) {
</span><br>
<span class="quotelev2">&gt;&gt;                 try {
</span><br>
<span class="quotelev2">&gt;&gt;         System.err.println(String.format(&quot;%2d/%2d:%s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;         MPI.COMM_WORLD.getRank(), MPI.COMM_WORLD.getSize(), msg));
</span><br>
<span class="quotelev2">&gt;&gt;                 } catch (MPIException ex) {
</span><br>
<span class="quotelev2">&gt;&gt;         System.err.println(String.format(&quot;%2s/%2s:%s&quot;, &quot;?&quot;, &quot;?&quot;, msg));
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             private static int hashcode(byte[] bytearray) {
</span><br>
<span class="quotelev2">&gt;&gt;                 if (bytearray == null) {
</span><br>
<span class="quotelev2">&gt;&gt;                     return 0;
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt;                 int hash = 39;
</span><br>
<span class="quotelev2">&gt;&gt;                 for (int i = 0; i &lt; bytearray.length; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;                     byte b = bytearray[i];
</span><br>
<span class="quotelev2">&gt;&gt;                     hash = hash * 7 + (int) b;
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt;                 return hash;
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             public static void main(String args[]) throws MPIException {
</span><br>
<span class="quotelev2">&gt;&gt;                 log(&quot;start main&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                 MPI.Init(args);
</span><br>
<span class="quotelev2">&gt;&gt;                 try {
</span><br>
<span class="quotelev2">&gt;&gt;                     log(&quot;initialized done&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                     byte[] saveMem = new byte[100000000];
</span><br>
<span class="quotelev2">&gt;&gt;                     MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev2">&gt;&gt;                     Random r = new Random();
</span><br>
<span class="quotelev2">&gt;&gt;                     r.nextBytes(saveMem);
</span><br>
<span class="quotelev2">&gt;&gt;                     if (MPI.COMM_WORLD.getRank() == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;                         for (int i = 0; i &lt; 1000; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;         saveMem[r.nextInt(saveMem.length)]++;
</span><br>
<span class="quotelev2">&gt;&gt;                             log(&quot;i = &quot; + i);
</span><br>
<span class="quotelev2">&gt;&gt;                             int[] lengthData = new int[]{saveMem.length};
</span><br>
<span class="quotelev2">&gt;&gt;                             log(&quot;object hash = &quot; + hashcode(saveMem));
</span><br>
<span class="quotelev2">&gt;&gt;                             log(&quot;length = &quot; + lengthData[0]);
</span><br>
<span class="quotelev2">&gt;&gt;         MPI.COMM_WORLD.bcast(lengthData, 1, MPI.INT &lt;<a href="http://MPI.INT">http://MPI.INT</a>&gt;, 0);
</span><br>
<span class="quotelev2">&gt;&gt;                             log(&quot;bcast length done (length = &quot; +
</span><br>
<span class="quotelev2">&gt;&gt;         lengthData[0] + &quot;)&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                             MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev2">&gt;&gt;                             MPI.COMM_WORLD.bcast(saveMem,
</span><br>
<span class="quotelev2">&gt;&gt;         lengthData[0], MPI.BYTE, 0);
</span><br>
<span class="quotelev2">&gt;&gt;                             log(&quot;bcast data done&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                             MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev2">&gt;&gt;                         }
</span><br>
<span class="quotelev2">&gt;&gt;                         MPI.COMM_WORLD.bcast(new int[]{0}, 1, MPI.INT
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://MPI.INT">http://MPI.INT</a>&gt;, 0);
</span><br>
<span class="quotelev2">&gt;&gt;                     } else {
</span><br>
<span class="quotelev2">&gt;&gt;                         while (true) {
</span><br>
<span class="quotelev2">&gt;&gt;                             int[] lengthData = new int[1];
</span><br>
<span class="quotelev2">&gt;&gt;         MPI.COMM_WORLD.bcast(lengthData, 1, MPI.INT &lt;<a href="http://MPI.INT">http://MPI.INT</a>&gt;, 0);
</span><br>
<span class="quotelev2">&gt;&gt;                             log(&quot;bcast length done (length = &quot; +
</span><br>
<span class="quotelev2">&gt;&gt;         lengthData[0] + &quot;)&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                             if (lengthData[0] == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;                                 break;
</span><br>
<span class="quotelev2">&gt;&gt;                             }
</span><br>
<span class="quotelev2">&gt;&gt;                             MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev2">&gt;&gt;                             saveMem = new byte[lengthData[0]];
</span><br>
<span class="quotelev2">&gt;&gt;                             MPI.COMM_WORLD.bcast(saveMem,
</span><br>
<span class="quotelev2">&gt;&gt;         saveMem.length, MPI.BYTE, 0);
</span><br>
<span class="quotelev2">&gt;&gt;                             log(&quot;bcast data done&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                             MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev2">&gt;&gt;                             log(&quot;object hash = &quot; + hashcode(saveMem));
</span><br>
<span class="quotelev2">&gt;&gt;                         }
</span><br>
<span class="quotelev2">&gt;&gt;                     }
</span><br>
<span class="quotelev2">&gt;&gt;                     MPI.COMM_WORLD.barrier();
</span><br>
<span class="quotelev2">&gt;&gt;                 } catch (MPIException ex) {
</span><br>
<span class="quotelev2">&gt;&gt;                     System.out.println(&quot;caugth error.&quot; + ex);
</span><br>
<span class="quotelev2">&gt;&gt;                     log(ex.getMessage());
</span><br>
<span class="quotelev2">&gt;&gt;                 } catch (RuntimeException ex) {
</span><br>
<span class="quotelev2">&gt;&gt;                     System.out.println(&quot;caugth error.&quot; + ex);
</span><br>
<span class="quotelev2">&gt;&gt;                     log(ex.getMessage());
</span><br>
<span class="quotelev2">&gt;&gt;                 } finally {
</span><br>
<span class="quotelev2">&gt;&gt;                     MPI.Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         ############ The Error (if it does not just hang up):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         #
</span><br>
<span class="quotelev2">&gt;&gt;         # A fatal error has been detected by the Java Runtime
</span><br>
<span class="quotelev2">&gt;&gt;         Environment:
</span><br>
<span class="quotelev2">&gt;&gt;         #
</span><br>
<span class="quotelev2">&gt;&gt;         #  SIGSEGV (0xb) at pc=0x00002b7e9c86e3a1, pid=1172,
</span><br>
<span class="quotelev2">&gt;&gt;         tid=47822674495232
</span><br>
<span class="quotelev2">&gt;&gt;         #
</span><br>
<span class="quotelev2">&gt;&gt;         #
</span><br>
<span class="quotelev2">&gt;&gt;         # A fatal error has been detected by the Java Runtime
</span><br>
<span class="quotelev2">&gt;&gt;         Environment:
</span><br>
<span class="quotelev2">&gt;&gt;         # JRE version: 7.0_25-b15
</span><br>
<span class="quotelev2">&gt;&gt;         # Java VM: Java HotSpot(TM) 64-Bit Server VM (23.25-b01 mixed
</span><br>
<span class="quotelev2">&gt;&gt;         mode linux-amd64 compressed oops)
</span><br>
<span class="quotelev2">&gt;&gt;         # Problematic frame:
</span><br>
<span class="quotelev2">&gt;&gt;         # #
</span><br>
<span class="quotelev2">&gt;&gt;         #  SIGSEGV (0xb) at pc=0x00002af69c0693a1, pid=1173,
</span><br>
<span class="quotelev2">&gt;&gt;         tid=47238546896640
</span><br>
<span class="quotelev2">&gt;&gt;         #
</span><br>
<span class="quotelev2">&gt;&gt;         # JRE version: 7.0_25-b15
</span><br>
<span class="quotelev2">&gt;&gt;         J de.uros.citlab.executor.test.TestSendBigFiles.hashcode([B)I
</span><br>
<span class="quotelev2">&gt;&gt;         #
</span><br>
<span class="quotelev2">&gt;&gt;         # Failed to write core dump. Core dumps have been disabled.
</span><br>
<span class="quotelev2">&gt;&gt;         To enable core dumping, try &quot;ulimit -c unlimited&quot; before
</span><br>
<span class="quotelev2">&gt;&gt;         starting Java again
</span><br>
<span class="quotelev2">&gt;&gt;         #
</span><br>
<span class="quotelev2">&gt;&gt;         # Java VM: Java HotSpot(TM) 64-Bit Server VM (23.25-b01 mixed
</span><br>
<span class="quotelev2">&gt;&gt;         mode linux-amd64 compressed oops)
</span><br>
<span class="quotelev2">&gt;&gt;         # Problematic frame:
</span><br>
<span class="quotelev2">&gt;&gt;         # J de.uros.citlab.executor.test.TestSendBigFiles.hashcode([B)I
</span><br>
<span class="quotelev2">&gt;&gt;         #
</span><br>
<span class="quotelev2">&gt;&gt;         # Failed to write core dump. Core dumps have been disabled.
</span><br>
<span class="quotelev2">&gt;&gt;         To enable core dumping, try &quot;ulimit -c unlimited&quot; before
</span><br>
<span class="quotelev2">&gt;&gt;         starting Java again
</span><br>
<span class="quotelev2">&gt;&gt;         #
</span><br>
<span class="quotelev2">&gt;&gt;         # An error report file with more information is saved as:
</span><br>
<span class="quotelev2">&gt;&gt;         # /home/gl069/ompi/bin/executor/hs_err_pid1172.log
</span><br>
<span class="quotelev2">&gt;&gt;         # An error report file with more information is saved as:
</span><br>
<span class="quotelev2">&gt;&gt;         # /home/gl069/ompi/bin/executor/hs_err_pid1173.log
</span><br>
<span class="quotelev2">&gt;&gt;         #
</span><br>
<span class="quotelev2">&gt;&gt;         # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev2">&gt;&gt;         # <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev2">&gt;&gt;         #
</span><br>
<span class="quotelev2">&gt;&gt;         #
</span><br>
<span class="quotelev2">&gt;&gt;         # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev2">&gt;&gt;         # <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev2">&gt;&gt;         #
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01172] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01172] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01172] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01173] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01173] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01173] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01172] [ 0]
</span><br>
<span class="quotelev2">&gt;&gt;         /usr/lib64/libpthread.so.0(+0xf100)[0x2b7e9596a100]
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01172] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt;         /usr/lib64/libc.so.6(gsignal+0x37)[0x2b7e95fc75f7]
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01172] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt;         /usr/lib64/libc.so.6(abort+0x148)[0x2b7e95fc8ce8]
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01172] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt;         /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x742ac5)[0x2b7e96a95ac5]
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01172] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt;         /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a2137)[0x2b7e96bf5137]
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01172] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt;         /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(JVM_handle_linux_signal+0x140)[0x2b7e96a995e0]
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01172] [ 6] [titan01:01173] [ 0]
</span><br>
<span class="quotelev2">&gt;&gt;         /usr/lib64/libpthread.so.0(+0xf100)[0x2af694ded100]
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01173] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt;         /usr/lib64/libc.so.6(+0x35670)[0x2b7e95fc7670]
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01172] [ 7] [0x2b7e9c86e3a1]
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01172] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;         /usr/lib64/libc.so.6(gsignal+0x37)[0x2af69544a5f7]
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01173] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt;         /usr/lib64/libc.so.6(abort+0x148)[0x2af69544bce8]
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01173] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt;         /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x742ac5)[0x2af695f18ac5]
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01173] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt;         /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(+0x8a2137)[0x2af696078137]
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01173] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt;         /home/gl069/bin/jdk1.7.0_25/jre/lib/amd64/server/libjvm.so(JVM_handle_linux_signal+0x140)[0x2af695f1c5e0]
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01173] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt;         /usr/lib64/libc.so.6(+0x35670)[0x2af69544a670]
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01173] [ 7] [0x2af69c0693a1]
</span><br>
<span class="quotelev2">&gt;&gt;         [titan01:01173] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;         -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt;         a non-zero exit code. Per user-direction, the job has been
</span><br>
<span class="quotelev2">&gt;&gt;         aborted.
</span><br>
<span class="quotelev2">&gt;&gt;         -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         mpirun noticed that process rank 1 with PID 0 on node titan01
</span><br>
<span class="quotelev2">&gt;&gt;         exited on signal 6 (Aborted).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         ########CONFIGURATION:
</span><br>
<span class="quotelev2">&gt;&gt;         I used the ompi master sources from github:
</span><br>
<span class="quotelev2">&gt;&gt;         commit 267821f0dd405b5f4370017a287d9a49f92e734a
</span><br>
<span class="quotelev2">&gt;&gt;         Author: Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Date:   Tue Jul 5 13:47:50 2016 +0900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         ./configure --enable-mpi-java
</span><br>
<span class="quotelev2">&gt;&gt;         --with-jdk-dir=/home/gl069/bin/jdk1.7.0_25 --disable-dlopen
</span><br>
<span class="quotelev2">&gt;&gt;         --disable-mca-dso
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thanks a lot for your help!
</span><br>
<span class="quotelev2">&gt;&gt;         Gundram
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2016/07/29584.php">http://www.open-mpi.org/community/lists/users/2016/07/29584.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/07/29585.php">http://www.open-mpi.org/community/lists/users/2016/07/29585.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29587.php">http://www.open-mpi.org/community/lists/users/2016/07/29587.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29588/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29589.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="29587.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>In reply to:</strong> <a href="29587.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29589.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<li><strong>Reply:</strong> <a href="29589.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
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

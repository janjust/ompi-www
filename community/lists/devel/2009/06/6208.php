<?
$subject_val = "Re: [OMPI devel] [RFC] Low pressure OPAL progress";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 05:30:07 2009" -->
<!-- isoreceived="20090610093007" -->
<!-- sent="Wed, 10 Jun 2009 11:29:48 +0200 (CEST)" -->
<!-- isosent="20090610092948" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Low pressure OPAL progress" -->
<!-- id="alpine.DEB.2.00.0906101033220.4598_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D8A10FC5-05AF-4265-94A5-A81916F08CC1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Low pressure OPAL progress<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-10 05:29:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6209.php">Anjin Pradhan: "[OMPI devel] Does open MPI support nodes behind NAT or Firewall"</a>
<li><strong>Previous message:</strong> <a href="6207.php">Ralph Castain: "[OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6205.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6253.php">Ashley Pittman: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks for jumping in.
<br>
<p>On Tue, 9 Jun 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; 2. Note that your solution presupposes that one MPI process can detect that 
</span><br>
<span class="quotelev1">&gt; the entire job is deadlocked.  This is not quite correct.  What exactly do 
</span><br>
<span class="quotelev1">&gt; you want to detect -- that one process may be imbalanced on its receives 
</span><br>
<span class="quotelev1">&gt; (waiting for long periods of time without doing anything), or that the entire 
</span><br>
<span class="quotelev1">&gt; job is deadlocked?  The former may be ok -- it depends on the app.  If the 
</span><br>
<span class="quotelev1">&gt; latter, it requires a bit more work -- e.g., if one process detects that 
</span><br>
<span class="quotelev1">&gt; nothing has happened for a long time, it can initiate a 
</span><br>
<span class="quotelev1">&gt; collective/distributed deadlock detection algorithm with all the other MPI 
</span><br>
<span class="quotelev1">&gt; processes in the job.  Only if *all* processes agree, then you can say &quot;this 
</span><br>
<span class="quotelev1">&gt; job is deadlocked, we might as well abort.&quot;  IIRC, there are some 3rd party 
</span><br>
<span class="quotelev1">&gt; tools / libraries that do this kind of stuff...?  (although it might be cool 
</span><br>
<span class="quotelev1">&gt; / useful to incorporate some of this technology into OMPI itself)
</span><br>
My approach was based on a per-process detection. Of course this does not 
<br>
indicate that the job is stuck, but tools like ganglia will quickly show 
<br>
you whether all processes are in the &quot;sleep&quot; state or not (maybe combined 
<br>
with debugging tools, to see if all are really in MPI, not blocked in an 
<br>
I/O or something). Then, the user or the admin can take a decision whether 
<br>
to abort the job or not. The &quot;sleep&quot; was only a way for me to bring the 
<br>
information to the user/admin. But as Ralph stated, a log would be even 
<br>
better in this case (more precise, no performance penalty, ..), also it 
<br>
needs to be coupled with other tools (whereas the sleep was naturally 
<br>
coupled with ganglia).
<br>
<p><span class="quotelev1">&gt; 3. As Ralph noted, how exactly do you know when &quot;nothing happens for a long 
</span><br>
<span class="quotelev1">&gt; time&quot; is a bad thing?  a) some codes are structured that way -- that they'll 
</span><br>
<span class="quotelev1">&gt; have no MPI activity for a long time, even if they have pending non-blocking 
</span><br>
<span class="quotelev1">&gt; receives pre-posted.  b) are you looking within the scope of *one* MPI 
</span><br>
<span class="quotelev1">&gt; blocking call?  I.e., if nothing happens *within the span of one blocking MPI 
</span><br>
<span class="quotelev1">&gt; call*, or are you looking if nothing happens across successive calls to 
</span><br>
<span class="quotelev1">&gt; opal_progress() (which may be few and far between after OMPI hits steady 
</span><br>
<span class="quotelev1">&gt; state when using non-TCP networks)?  It seems like there would need to be a 
</span><br>
<span class="quotelev1">&gt; [thread safe] &quot;reset&quot; at some point -- indicating that something has 
</span><br>
<span class="quotelev1">&gt; happened.  That either would be when something has happened, or that a 
</span><br>
<span class="quotelev1">&gt; blocking MPI call has exited, or ....?  Need to make sure that that &quot;reset&quot; 
</span><br>
<span class="quotelev1">&gt; doesn't get expensive.
</span><br>
Uh. This is way more complicated than my patch. From the various 
<br>
reactions, it seems my RFC is misleading. I only work in 
<br>
opal_condition_wait(), which calls opal_progress(). The idea was only to 
<br>
sleep when we had been blocked in an MPI Wait (or similar) for a long 
<br>
time. So, we sleep only if there is no possible background computation : 
<br>
the MPI process is waiting, and basically doing nothing else. MPI_Test 
<br>
functions will never call sleep. The fact that opal_progress() did 
<br>
progress or not does not matter, the only question is : how long have we 
<br>
been in opal_condition_wait() ?
<br>
<p>So, what I would want to do now is to replace the sleep by a message sent 
<br>
to the HNP indicating &quot;I'm blocked for X minutes&quot;, then X minutes later 
<br>
&quot;I'm blocked for 2X minutes&quot;, etc.
<br>
<p>The HNP would then aggregate those messages and when every process has 
<br>
sent one, log &quot;Everyone is blocked for X minutes&quot;, then (I presume) X 
<br>
minutes later, &quot;Everyone is blocked for 2X minutes&quot;, etc.
<br>
<p>I would then let users, admin or admin tools decide whether or not to 
<br>
abort the job.
<br>
<p>If someone finally receives something, it should send a message to the HNP 
<br>
indicating that it is no longer blocked, or maybe just looking at logs 
<br>
should suffice to see if block times continue to increase or not.
<br>
<p>Since I'm only working on opal_condition_wait(), deadlocks in applications 
<br>
using only MPI_Test calls will not be detected (but is that possible in 
<br>
the first place ?).
<br>
<p>Sylvain
<br>
<p><span class="quotelev1">&gt; On Jun 9, 2009, at 6:43 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Couple of other things to help stimulate the thinking:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. it isn't that OMPI -couldn't- receive a message, but rather that it 
</span><br>
<span class="quotelev2">&gt;&gt; -didn't- receive a message. This may or may not indicate that there is a 
</span><br>
<span class="quotelev2">&gt;&gt; problem. Could just be an application that doesn't need to communicate for 
</span><br>
<span class="quotelev2">&gt;&gt; awhile, as per my example. I admit, though, that 10 minutes is a tad 
</span><br>
<span class="quotelev2">&gt;&gt; long...but I've seen some bizarre apps around here :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. instead of putting things to sleep or even adjusting the loop rate, you 
</span><br>
<span class="quotelev2">&gt;&gt; might want to consider using the orte_notifier capability and notify the 
</span><br>
<span class="quotelev2">&gt;&gt; system that the job may be stalled. Or perhaps adding an API to the 
</span><br>
<span class="quotelev2">&gt;&gt; orte_errmgr framework to notify it that nothing has been received for 
</span><br>
<span class="quotelev2">&gt;&gt; awhile, and let people implement different strategies for detecting what 
</span><br>
<span class="quotelev2">&gt;&gt; might be &quot;wrong&quot; and what they want to do about it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My point with this second bullet is that there are other response options 
</span><br>
<span class="quotelev2">&gt;&gt; than hardwiring putting the process to sleep. You could let someone know so 
</span><br>
<span class="quotelev2">&gt;&gt; a human can decide what, if anything, to do about it, or provide a hook so 
</span><br>
<span class="quotelev2">&gt;&gt; that people can explore/utilize different response strategies...or both!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jun 9, 2009 at 6:52 AM, Sylvain Jeaugey &lt;sylvain.jeaugey_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I understand your point of view, and mostly share it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think the biggest point in my example is that sleep occurs only after (I 
</span><br>
<span class="quotelev2">&gt;&gt; was wrong in my previous e-mail) 10 minutes of inactivity, and this value 
</span><br>
<span class="quotelev2">&gt;&gt; is fully configurable. I didn't intend to call sleep after 2 seconds. Plus, 
</span><br>
<span class="quotelev2">&gt;&gt; as said before, I planned to have the library do show_help() when this 
</span><br>
<span class="quotelev2">&gt;&gt; happens (something like : &quot;Open MPI couldn't receive a message for 10 
</span><br>
<span class="quotelev2">&gt;&gt; minutes, lowering pressure&quot;) so that the application that really needs more 
</span><br>
<span class="quotelev2">&gt;&gt; than 10 minutes to receive a message can increase it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Looking at the tick rate code, I couldn't see how changing it would make 
</span><br>
<span class="quotelev2">&gt;&gt; CPU usage drop. If I understand correctly your e-mail, you block in the 
</span><br>
<span class="quotelev2">&gt;&gt; kernel using poll(), is that right ? So, you may well loose 10 us because 
</span><br>
<span class="quotelev2">&gt;&gt; of that kernel call, but this is a lot less than the 1 ms I'm currently 
</span><br>
<span class="quotelev2">&gt;&gt; loosing with usleep. This makes sense - although being hard to implement 
</span><br>
<span class="quotelev2">&gt;&gt; since all btl must have this ability.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your comments, I will continue to think about it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sylvain
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 9 Jun 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My concern with any form of sleep is with the impact on the proc - since 
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress might not be running in a separate thread, won't the sleep 
</span><br>
<span class="quotelev2">&gt;&gt; apply to the process as a whole? In that case, the process isn't free to 
</span><br>
<span class="quotelev2">&gt;&gt; continue computing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can envision applications that might call down into the MPI library and 
</span><br>
<span class="quotelev2">&gt;&gt; have opal_progress not find anything, but there is nothing wrong. The 
</span><br>
<span class="quotelev2">&gt;&gt; application could continue computations just fine. I would hate to see us 
</span><br>
<span class="quotelev2">&gt;&gt; put the process to sleep just because the MPI library wasn't busy enough.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hence my suggestion to just change the tick rate. It would definitely cause 
</span><br>
<span class="quotelev2">&gt;&gt; a higher latency for the first message that arrived while in this state, 
</span><br>
<span class="quotelev2">&gt;&gt; which is bothersome, but would meet the stated objective without 
</span><br>
<span class="quotelev2">&gt;&gt; interfering with the process itself.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; LANL has also been looking at this problem of stalled jobs, but from a 
</span><br>
<span class="quotelev2">&gt;&gt; different approach. We monitor (using a separate job) progress in terms of 
</span><br>
<span class="quotelev2">&gt;&gt; output files changing in size plus other factors as specified by the user. 
</span><br>
<span class="quotelev2">&gt;&gt; If we don't see any progress in those terms over some time, then we kill 
</span><br>
<span class="quotelev2">&gt;&gt; the job. We chose that path because of the concerns expressed above - e.g., 
</span><br>
<span class="quotelev2">&gt;&gt; on our RR machine, intense computations can be underway on the Cell blades 
</span><br>
<span class="quotelev2">&gt;&gt; while the Opteron MPI processes wait for us to reach a communication point. 
</span><br>
<span class="quotelev2">&gt;&gt; We -want- those processes spinning away so that, when the comm starts, it 
</span><br>
<span class="quotelev2">&gt;&gt; can proceed as quickly as possible.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just some thoughts...
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 9, 2009, at 5:28 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm entirely convinced that MPI doesn't have to save power in a normal 
</span><br>
<span class="quotelev2">&gt;&gt; scenario. The idea is just that if an MPI process is blocked (i.e. has not 
</span><br>
<span class="quotelev2">&gt;&gt; performed progress for -say- 5 minutes (default in my implementation), we 
</span><br>
<span class="quotelev2">&gt;&gt; stop busy polling and have the process drop from 100% CPU usage to 0%.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do not call sleep() but usleep(). The result if quite the same, but is 
</span><br>
<span class="quotelev2">&gt;&gt; less hurting performance in case of (unexpected) restart.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, the goal of my RFC was also to know if there was a more clean way 
</span><br>
<span class="quotelev2">&gt;&gt; to achieve my goal, and from what I read, I guess I should look at the 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;tick&quot; rate instead of trying to do my own delaying.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One way around this is to make all blocked communications (even SM) to use 
</span><br>
<span class="quotelev2">&gt;&gt; poll to block for incoming messages.  Jeff and I have discussed this and 
</span><br>
<span class="quotelev2">&gt;&gt; had many false starts on it.  The biggest issue is coming up with a way to 
</span><br>
<span class="quotelev2">&gt;&gt; have blocks on the SM btl converted to the system poll call without 
</span><br>
<span class="quotelev2">&gt;&gt; requiring a socket write for every packet.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The usleep solution works but is kind of ugly IMO.  I think when I looked 
</span><br>
<span class="quotelev2">&gt;&gt; at doing that the overhead increased signifcantly for certain 
</span><br>
<span class="quotelev2">&gt;&gt; communications.  Maybe not for toy benchmarks but for less synchronized 
</span><br>
<span class="quotelev2">&gt;&gt; processes I saw the usleep adding overhead where I didn't want it too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; Don't worry, I was quite expecting the configure-in requirement. However, I 
</span><br>
<span class="quotelev2">&gt;&gt; don't think my patch is good for inclusion, it is only an example to 
</span><br>
<span class="quotelev2">&gt;&gt; describe what I want to achieve.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot for your comments,
</span><br>
<span class="quotelev2">&gt;&gt; Sylvain
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 8 Jun 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not entirely convinced this actually achieves your goals, but I can see 
</span><br>
<span class="quotelev2">&gt;&gt; some potential benefits. I'm also not sure that power consumption is that 
</span><br>
<span class="quotelev2">&gt;&gt; big of an issue that MPI needs to begin chasing &quot;power saver&quot; modes of 
</span><br>
<span class="quotelev2">&gt;&gt; operation, but that can be a separate debate some day.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm assuming you don't mean that you actually call &quot;sleep()&quot; as this would 
</span><br>
<span class="quotelev2">&gt;&gt; be very bad - I'm assuming you just change the opal_progress &quot;tick&quot; rate 
</span><br>
<span class="quotelev2">&gt;&gt; instead. True? If not, and you really call &quot;sleep&quot;, then I would have to 
</span><br>
<span class="quotelev2">&gt;&gt; oppose adding this to the code base pending discussion with others who can 
</span><br>
<span class="quotelev2">&gt;&gt; corroborate that this won't cause problems.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Either way, I could live with this so long as it was done as a 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;configure-in&quot; capability. Just having the params default to a value that 
</span><br>
<span class="quotelev2">&gt;&gt; causes the system to behave similarly to today isn't enough - we still wind 
</span><br>
<span class="quotelev2">&gt;&gt; up adding logic into a very critical timing loop for no reason. A simple 
</span><br>
<span class="quotelev2">&gt;&gt; configure option of --enable-mpi-progress-monitoring would be sufficient to 
</span><br>
<span class="quotelev2">&gt;&gt; protect the code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 8, 2009, at 9:50 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What : when nothing has been received for a very long time - e.g. 5 
</span><br>
<span class="quotelev2">&gt;&gt; minutes, stop busy polling in opal_progress and switch to a usleep-based 
</span><br>
<span class="quotelev2">&gt;&gt; one.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why : when we have long waits, and especially when an application is 
</span><br>
<span class="quotelev2">&gt;&gt; deadlock'ed, detecting it is not easy and a lot of power is wasted until 
</span><br>
<span class="quotelev2">&gt;&gt; the end of the time slice (if there is one).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Where : an example of how it could be implemented is available at 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://bitbucket.org/jeaugeys/low-pressure-opal-progress/">http://bitbucket.org/jeaugeys/low-pressure-opal-progress/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Principle
</span><br>
<span class="quotelev2">&gt;&gt; =========
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress() ensures the progression of MPI communication. The current 
</span><br>
<span class="quotelev2">&gt;&gt; algorithm is a loop calling progress on all registered components. If the 
</span><br>
<span class="quotelev2">&gt;&gt; program is blocked, the loop will busy-poll indefinetely.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Going to sleep after a certain amount of time with nothing received is 
</span><br>
<span class="quotelev2">&gt;&gt; interesting for two things :
</span><br>
<span class="quotelev2">&gt;&gt; - Administrator can easily detect whether a job is deadlocked : all the 
</span><br>
<span class="quotelev2">&gt;&gt; processes are in sleep(). Currently, all processors are using 100% cpu and 
</span><br>
<span class="quotelev2">&gt;&gt; it is very hard to know if progression is still happening or not.
</span><br>
<span class="quotelev2">&gt;&gt; - When there is nothing to receive, power usage is highly reduced.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, it could hurt performance in some cases, typically if we go to 
</span><br>
<span class="quotelev2">&gt;&gt; sleep just before the message arrives. This will highly depend on the 
</span><br>
<span class="quotelev2">&gt;&gt; parameters you give to the sleep mechanism.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At first, we can start with the following assumption : if the sleep takes T 
</span><br>
<span class="quotelev2">&gt;&gt; usec, then sleeping after 10000xT should slow down Receives by a factor 
</span><br>
<span class="quotelev2">&gt;&gt; less than 0.01 %.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, other processes may suffer from you being late, and be delayed by 
</span><br>
<span class="quotelev2">&gt;&gt; T usec (which may represent more than 0.01% for them).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, the goal of this mechanism is mainly to detect far-too-long-waits and 
</span><br>
<span class="quotelev2">&gt;&gt; should quite never be used in normal MPI jobs. It could also trigger a 
</span><br>
<span class="quotelev2">&gt;&gt; warning message when starting to sleep, or at least a trace in the 
</span><br>
<span class="quotelev2">&gt;&gt; notifier.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Details of Implementation
</span><br>
<span class="quotelev2">&gt;&gt; =========================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Three parameters fully control the behaviour of this mechanism :
</span><br>
<span class="quotelev2">&gt;&gt; * opal_progress_sleep_count : number of unsuccessful opal_progress() calls 
</span><br>
<span class="quotelev2">&gt;&gt; before we start the timer (to prevent latency impact). It defaults to -1, 
</span><br>
<span class="quotelev2">&gt;&gt; which completely deactivates the sleep (and is therefore equivalent to the 
</span><br>
<span class="quotelev2">&gt;&gt; former code). A value of 1000 can be thought of as a starting point to 
</span><br>
<span class="quotelev2">&gt;&gt; enable this mechanism.
</span><br>
<span class="quotelev2">&gt;&gt; * opal_progress_sleep_trigger : time to wait before going to 
</span><br>
<span class="quotelev2">&gt;&gt; low-pressure-powersave mode. Default : 600 (in seconds) = 10 minutes.
</span><br>
<span class="quotelev2">&gt;&gt; * opal_progress_sleep_duration : time we sleep at each further unsuccessful 
</span><br>
<span class="quotelev2">&gt;&gt; call to opal_progress(). Default : 1000 (in us) = 1 ms.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The duration is big enough to make the process show 0% CPU in top, but low 
</span><br>
<span class="quotelev2">&gt;&gt; enough to preserve a good trigger/duration ratio.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The trigger is voluntary high to keep a good trigger/duration ratio. 
</span><br>
<span class="quotelev2">&gt;&gt; Indeed, to prevent delays from causing chain reactions, trigger should be 
</span><br>
<span class="quotelev2">&gt;&gt; higher than duration * numprocs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Possible Improvements &amp; Pitfalls
</span><br>
<span class="quotelev2">&gt;&gt; ================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * Trigger could be set automatically at max(trigger, duration * numprocs * 
</span><br>
<span class="quotelev2">&gt;&gt; 2).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * poll_start and poll_count could be fields of the opal_condition_t struct.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * The sleep section may be exported in a #define and reported in all the 
</span><br>
<span class="quotelev2">&gt;&gt; progress pathes (I'm not sure my patch is good for progress threads for 
</span><br>
<span class="quotelev2">&gt;&gt; example)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6209.php">Anjin Pradhan: "[OMPI devel] Does open MPI support nodes behind NAT or Firewall"</a>
<li><strong>Previous message:</strong> <a href="6207.php">Ralph Castain: "[OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6205.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6253.php">Ashley Pittman: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
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

<?
$subject_val = "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 17:12:12 2016" -->
<!-- isoreceived="20160615211212" -->
<!-- sent="Wed, 15 Jun 2016 16:11:40 -0500" -->
<!-- isosent="20160615211140" -->
<!-- name="Jason Maldonis" -->
<!-- email="maldonis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2" -->
<!-- id="CA+LevYK8naQsbvsTRT3_z0xNJ0mZsBV9gxLw0poxanxwfs2Oow_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5vpy33cojd5VOd_dYyORm5bMVx9koZ_L=anyx5=hYK2fw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2<br>
<strong>From:</strong> Jason Maldonis (<em>maldonis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 17:11:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29465.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Previous message:</strong> <a href="29463.php">Gus Correa: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>In reply to:</strong> <a href="29451.php">Gilles Gouaillardet: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>I would like to be able to run on anywhere from 1-16 nodes.
<br>
<p>Let me explain our (mpi/parallelism) situation briefly for more context:
<br>
We have a &quot;master&quot; job that needs MPI functionality.  This master job is
<br>
written in python (we use mpi4py).  The master job then makes spawn calls
<br>
out to other MPI programs written in either C or Fortran. The C/Fortran
<br>
programs do not need to communicate with the master python MPI job
<br>
(although it would be nice to have the option at some point).  The master
<br>
job runs the child processes, collects their outputs, then reruns them with
<br>
new input parameters. This continues for a long time in a big for-loop.
<br>
<p>So that's our setup, and that is the context in which I found this issue.
<br>
<p>Unfortunately I am not the cluster admin for our university's cluster (at
<br>
UW Madison).  There are probably close to 100 people who use the cluster,
<br>
so I am guessing that the admins might be reluctant to install an mpi
<br>
library that might not be stable.  If you think I am misunderstanding what
<br>
you are asking, let me know please.  If the ETA on fixing this bug is going
<br>
to be closer to 6 months rather than 1 month, it might be useful to do what
<br>
you suggest if it will provide a noticeable speed up.
<br>
<p>I'll admit that I have run into quite a few issues already getting the MPI
<br>
within this code to work, so I am slightly hesitant to add more complexity
<br>
to it and other potential avenues for hangs/crashes :(  I don't understand
<br>
the intricacies of MPI very well though, so if you don't think this is an
<br>
issue then that is a big bonus!
<br>
<p>Thanks!
<br>
Jason
<br>
<p><p><p>Jason Maldonis
<br>
Research Assistant of Professor Paul Voyles
<br>
Materials Science Grad Student
<br>
University of Wisconsin, Madison
<br>
1509 University Ave, Rm M142
<br>
Madison, WI 53706
<br>
maldonis_at_[hidden]
<br>
608-295-5532
<br>
<p>On Wed, Jun 15, 2016 at 5:34 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jason,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How many nodes are you running on ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since you have an IB network, IB is used for intra node communication
</span><br>
<span class="quotelev1">&gt; between tasks that are not part of the same OpenMPI job (read spawn group)
</span><br>
<span class="quotelev1">&gt; I can make a simple patch to use tcp instead of IB for these intra node
</span><br>
<span class="quotelev1">&gt; communication,
</span><br>
<span class="quotelev1">&gt; Let me know if you are willing to give it a try
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday, June 15, 2016, Jason Maldonis &lt;maldonis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Ralph for all the help. I will do that until it gets fixed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nathan, I am very very interested in this working because we are
</span><br>
<span class="quotelev2">&gt;&gt; developing some new cool code for research in materials science. This is
</span><br>
<span class="quotelev2">&gt;&gt; the last piece of the puzzle for us I believe. I can use TCP for now though
</span><br>
<span class="quotelev2">&gt;&gt; of course. While I doubt I can help, if you are having trouble reproducing
</span><br>
<span class="quotelev2">&gt;&gt; the problem or something else, feel free to let me know. I understand you
</span><br>
<span class="quotelev2">&gt;&gt; probably have a bunch of other things on your plate too, but if there is
</span><br>
<span class="quotelev2">&gt;&gt; something I can do to speed up the process, just let me know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lastly, what are the chances there is a place/website/etc where I can
</span><br>
<span class="quotelev2">&gt;&gt; watch to see when the fix for this has been made?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks everyone!
</span><br>
<span class="quotelev2">&gt;&gt; Jason
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jason Maldonis
</span><br>
<span class="quotelev2">&gt;&gt; Research Assistant of Professor Paul Voyles
</span><br>
<span class="quotelev2">&gt;&gt; Materials Science Grad Student
</span><br>
<span class="quotelev2">&gt;&gt; University of Wisconsin, Madison
</span><br>
<span class="quotelev2">&gt;&gt; 1509 University Ave, Rm M142
</span><br>
<span class="quotelev2">&gt;&gt; Madison, WI 53706
</span><br>
<span class="quotelev2">&gt;&gt; maldonis_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 608-295-5532
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jun 14, 2016 at 4:51 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You don&#226;&#128;&#153;t want to always use those options as your performance will take
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a hit - TCP vs Infiniband isn&#226;&#128;&#153;t a good option. Sadly, this is something we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need someone like Nathan to address as it is a bug in the code base, and in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an area I&#226;&#128;&#153;m not familiar with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For now, just use TCP so you can move forward
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 14, 2016, at 2:14 PM, Jason Maldonis &lt;maldonis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph, The problem *does* go away if I add &quot;-mca btl tcp,sm,self&quot; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the mpiexec cmd line. (By the way, I am using mpiexec rather than mpirun;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do you recommend one over the other?) Will you tell me what this means for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me? For example, should I always append these arguments to mpiexec for my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-test jobs as well?   I do not know what you mean by fabric
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unfortunately, but I can give you some system information (see end of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email). Unfortunately I am not a system admin so I do not have sudo rights.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just let me know if I can tell you something more specific though and I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will get it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nathan,  Thank you for your response. Unfortunately I have no idea what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that means :(  I can forward that to our cluster managers, but I do not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know if that is enough information for them to understand what they might
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need to do to help me with this issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ lscpu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Architecture:          x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU op-mode(s):        32-bit, 64-bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Byte Order:            Little Endian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU(s):                20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On-line CPU(s) list:   0-19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thread(s) per core:    1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Core(s) per socket:    10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Socket(s):             2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NUMA node(s):          2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vendor ID:             GenuineIntel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU family:            6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Model:                 63
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Stepping:              2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU MHz:               2594.159
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BogoMIPS:              5187.59
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Virtualization:        VT-x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L1d cache:             32K
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L1i cache:             32K
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L2 cache:              256K
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L3 cache:              25600K
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NUMA node0 CPU(s):     0,2,4,6,8,10,12,14,16,18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NUMA node1 CPU(s):     1,3,5,7,9,11,13,15,17,19
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jason
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jason Maldonis
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research Assistant of Professor Paul Voyles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Materials Science Grad Student
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Wisconsin, Madison
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1509 University Ave, Rm M142
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Madison, WI 53706
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maldonis_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 608-295-5532
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Jun 14, 2016 at 1:27 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That message is coming from udcm in the openib btl. It indicates some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sort of failure in the connection mechanism. It can happen if the listening
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thread no longer exists or is taking too long to process messages.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 14, 2016, at 12:20 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmm&#226;&#128;&#166;I&#226;&#128;&#153;m unable to replicate a problem on my machines. What fabric are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you using? Does the problem go away if you add &#226;&#128;&#156;-mca btl tcp,sm,self&#226;&#128;&#157; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the mpirun cmd line?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 14, 2016, at 11:15 AM, Jason Maldonis &lt;maldonis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph, et. al,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Great, thank you for the help. I downloaded the mpi loop spawn test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; directly from what I think is the master repo on github:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c">https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am still using the mpi code from 1.10.2, however.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is that test updated with the correct code? If so, I am still getting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the same &quot;too many retries sending message to 0x0184:0x00001d27, giving up&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; errors. I also just downloaded the June 14 nightly tarball (7.79MB) from:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://www.open-mpi.org/nightly/v2.x/">https://www.open-mpi.org/nightly/v2.x/</a> and I get the same error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you please point me to the correct code?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you need me to provide more information please let me know.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jason
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jason Maldonis
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Research Assistant of Professor Paul Voyles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Materials Science Grad Student
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University of Wisconsin, Madison
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1509 University Ave, Rm M142
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Madison, WI 53706
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; maldonis_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 608-295-5532
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Jun 14, 2016 at 10:59 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I dug into this a bit (with some help from others) and found that the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; spawn code appears to be working correctly - it is the test in orte/test
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that is wrong. The test has been correctly updated in the 2.x and master
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; repos, but we failed to backport it to the 1.10 series. I have done so this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; morning, and it will be in the upcoming 1.10.3 release (out very soon).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jun 13, 2016, at 3:53 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; No, that PR has nothing to do with loop_spawn. I&#226;&#128;&#153;ll try to take a look
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; at the problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jun 13, 2016, at 3:47 PM, Jason Maldonis &lt;maldonis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am using OpenMPI 1.10.2 compiled with Intel. I am trying to get the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; spawn functionality to work inside a for loop, but continue to get
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the error &quot;too many retries sending message to &lt;addr&gt;, giving up&quot; somewhere
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; down the line in the for loop, seemingly because the processors are not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; being fully freed when disconnecting/finishing. I found the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orte/test/mpi/loop_spawn.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;<a href="https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c">https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  example/test, and it has the exact same problem. I also found this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;<a href="https://www.open-mpi.org/community/lists/devel/2016/04/18814.php">https://www.open-mpi.org/community/lists/devel/2016/04/18814.php</a>&gt; mailing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; list post from ~ a month and a half ago.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is this PR (<a href="https://github.com/open-mpi/ompi/pull/1473">https://github.com/open-mpi/ompi/pull/1473</a>) about the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; same issue I am having (ie the loop_spawn example not working)? If
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; so, do you know if we can downgrade to e.g. 1.10.1 or another version? Or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is there another solution to fix this bug until you get a new release out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (or is one coming shortly to fix this maybe?)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Below is the output of the loop_spawn test on our university's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cluster, which I know very little about in terms of architecture but can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; get information if it's helpful. The large group of people who manage this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cluster are very good.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for your time.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jason
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec -np 5 loop_spawn
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent*******************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: Launching MPI*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent*******************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: Launching MPI*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent*******************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: Launching MPI*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent*******************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: Launching MPI*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent*******************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: Launching MPI*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child: launch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child merged rank = 5, size = 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 rank 4, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 rank 0, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 rank 2, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 rank 3, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #0 rank 1, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child 329941: exiting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child: launch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 rank 0, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 rank 2, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 rank 1, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 rank 3, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child merged rank = 5, size = 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #1 rank 4, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child 329945: exiting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child: launch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 rank 3, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 rank 0, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 rank 2, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child merged rank = 5, size = 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 rank 1, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #2 rank 4, size 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child 329949: exiting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parent: MPI_Comm_spawn #3 return : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child: launch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node:port?] too many retries sending message to &lt;addr&gt;, giving up
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Child job 5 terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Process name: [[...],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Exit code:    255
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29425.php">http://www.open-mpi.org/community/lists/users/2016/06/29425.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29435.php">http://www.open-mpi.org/community/lists/users/2016/06/29435.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29438.php">http://www.open-mpi.org/community/lists/users/2016/06/29438.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29439.php">http://www.open-mpi.org/community/lists/users/2016/06/29439.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29440.php">http://www.open-mpi.org/community/lists/users/2016/06/29440.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29444.php">http://www.open-mpi.org/community/lists/users/2016/06/29444.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29445.php">http://www.open-mpi.org/community/lists/users/2016/06/29445.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29451.php">http://www.open-mpi.org/community/lists/users/2016/06/29451.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29464/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29465.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>Previous message:</strong> <a href="29463.php">Gus Correa: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>In reply to:</strong> <a href="29451.php">Gilles Gouaillardet: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
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

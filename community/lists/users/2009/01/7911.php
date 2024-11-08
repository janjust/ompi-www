<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 31 11:39:54 2009" -->
<!-- isoreceived="20090131163954" -->
<!-- sent="Sat, 31 Jan 2009 09:39:42 -0700" -->
<!-- isosent="20090131163942" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="878E849B-D403-421E-89DB-07676A059F13_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0901261239r7925adddqac748847e3c64937_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Handling output of processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-31 11:39:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7912.php">Jack Bryan: "[OMPI users] Open mpi 123 install error for BLACS"</a>
<li><strong>Previous message:</strong> <a href="7910.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>In reply to:</strong> <a href="7846.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7920.php">Jeff Squyres: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7920.php">Jeff Squyres: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For anyone following this thread:
<br>
<p>I have completed the IOF options discussed below. Specifically, I have  
<br>
added the following:
<br>
<p>* a new &quot;timestamp-output&quot; option that timestamp's each line of output
<br>
<p>* a new &quot;output-filename&quot; option that redirects each proc's output to  
<br>
a separate rank-named file.
<br>
<p>* a new &quot;xterm&quot; option that redirects the output of the specified  
<br>
ranks to a separate xterm window.
<br>
<p>You can obtain a copy of the updated code at:
<br>
<p><a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r20392.tar.gz</a>
<br>
<p>If you install this, do a &quot;man mpirun&quot; to see a detailed explanation  
<br>
of how to use these options.
<br>
<p>Any feedback you can provide on them would be most appreciated! If it  
<br>
looks okay and proves useful, I'll try to get it included in an  
<br>
upcoming release as soon as possible.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Jan 26, 2009, at 1:39 PM, jody wrote:
<br>
<p><span class="quotelev1">&gt; That's cool then - i have written a shellscript
</span><br>
<span class="quotelev1">&gt; which automatically does the xhost stuff for all
</span><br>
<span class="quotelev1">&gt; nodes in my hostfile :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 26, 2009 at 9:25 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 26, 2009, at 1:20 PM, jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would rather not have mpirun doing an xhost command - I think  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; beyond our comfort zone. Frankly, if someone wants to do this, it  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; them to have things properly setup on their machine - as a rule,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we don't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mess with your machine's configuration. Makes sys admins upset :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So what you mean is that the user must do the xhost before using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xceren feature?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If not, how else can i have xterms from another machine display  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; locally?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That is correct. I don't think that is -too- odious a requirement -  
</span><br>
<span class="quotelev2">&gt;&gt; I'm just
</span><br>
<span class="quotelev2">&gt;&gt; not comfortable modifying access controls from within OMPI since  
</span><br>
<span class="quotelev2">&gt;&gt; xhost
</span><br>
<span class="quotelev2">&gt;&gt; persists after OMPI is done with the job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, I can check to ensure that the DISPLAY value is locally  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; automatically export it for you (so you don't have to do the -x  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DISPLAY
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; option). What I have done is provided a param whereby you can  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tell us
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; what
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command to use to generate the new screen, with it defaulting to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;xterm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -e&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I also allow you to specify which ranks you want displayed this  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; way - you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can specify &quot;all&quot; by giving it a &quot;-1&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cool!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Will hopefully have this done today or tomorrow. It will be in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the OMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk repo for now. I'll send out a note pointing to it so people  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; check
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all these options out - I would really appreciate the help to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ensure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; things
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are working across as many platforms as possible before we put it  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; official release!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll be happy to test these new features!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have written some shell scripts which ease the output
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to an xterm for each processor for normal execution(run_sh.sh),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gdb (run_gdb.sh), and valgrind (run_vg.sh).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In order for the xterms to be shown on your machine,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you have to set the DISPLAY variable on every host
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (if this is not done by ssh)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export DISPLAY=myhost:0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on myhost you may have to allow access:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xhost +&lt;host-name&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for each machine in your hostfile.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Then start
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 12 -x DISPLAY run_gdb.sh myApp arg1 arg2 arg3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've attached these little scripts to this mail.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Feel free to use them.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've started working on my &quot;complicated&quot; way, i.e.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrappers redirecting output via sockets to a server.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sun, Jan 25, 2009 at 1:20 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For those of you following this thread:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have been impressed by the various methods used to grab the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; output
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; processes. Since this is clearly something of interest to a broad
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; audience,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I would like to try and make this easier to do by adding some  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; options
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun. Coming in 1.3.1 will be --tag-output, which will  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; automatically
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tag
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; each line of output with the rank of the process - this was  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; already in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; works, but obviously doesn't meet the needs expressed here.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have done some prelim work on a couple of options based on this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; thread:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1. spawn a screen and redirect process output to it, with the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ability
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; request separate screens for each specified rank. Obviously,  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; specifying
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; all
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ranks would be the equivalent of replacing &quot;my_app&quot; on the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun cmd
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; line
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with &quot;xterm my_app&quot;. However, there are cases where you only  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; need to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; see
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; output from a subset of the ranks, and that is the intent of this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; option.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2. redirect output of specified processes to files using the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; provided
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; filename appended with &quot;.rank&quot;. You can do this for all ranks,  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; or a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; specified subset of them.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 3. timestamp output
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is there anything else people would like to see?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It is also possible to write a dedicated app such as Jody  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; described,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; but
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that is outside my purview for now due to priorities. However,  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I can
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; provide
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; technical advice to such an effort, so feel free to ask.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jan 23, 2009, at 12:19 PM, Gijsbert Wiesenekker wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; jody wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have a small cluster consisting of 9 computers (8x2 CPUs, 1x4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CPUs).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would like to be able to observe the output of the processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; separately during an mpirun.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; What i currently do is to apply the mpirun to a shell script  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; opens a xterm for each process,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; which then starts the actual application.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This works, but is a bit complicated, e.g. finding the window  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; you're
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; interested in among 19 others.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So i was wondering is there a possibility to capture the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; outputs separately, so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; i can make an application in which i can switch between the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processor outputs?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I could imagine that could be done by wrapper applications  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; redirect the output over a TCP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; socket to a server application.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But perhaps there is an easier way, or something like this  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; alread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; does
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; exist?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; For C I use a printf wrapper function that writes the output  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; logfile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I derive the name of the logfile from the mpi_id. It prefixes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; lines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; a time-stamp, so you also get some basic profile information.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; send
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the source code if you like.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gijsbert
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; run_gdb 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; .sh 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; run_vg 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; .sh&gt;&lt;run_sh.sh&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="7912.php">Jack Bryan: "[OMPI users] Open mpi 123 install error for BLACS"</a>
<li><strong>Previous message:</strong> <a href="7910.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>In reply to:</strong> <a href="7846.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7920.php">Jeff Squyres: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7920.php">Jeff Squyres: "Re: [OMPI users] Handling output of processes"</a>
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

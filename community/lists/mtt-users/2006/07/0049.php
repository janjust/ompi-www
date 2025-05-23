<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 18:23:28 2006" -->
<!-- isoreceived="20060720222328" -->
<!-- sent="Thu, 20 Jul 2006 18:23:22 -0400" -->
<!-- isosent="20060720222322" -->
<!-- name="Anna Tatashina" -->
<!-- email="Anna.Tatashina_at_[hidden]" -->
<!-- subject="Re: [MTT users] nightly results format" -->
<!-- id="44C0025A.8020802_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C0E577A3.B1A8%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Anna Tatashina (<em>Anna.Tatashina_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-20 18:23:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0050.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<li><strong>Previous message:</strong> <a href="0048.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<li><strong>In reply to:</strong> <a href="0048.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0050.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<li><strong>Reply:</strong> <a href="0050.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
well, what might suffice is having one rather short email - like 
<br>
executive summary you listed as #1. and then as well, include links that 
<br>
would perform 3-4 standard queries which could include
<br>
query1:list all failures
<br>
query2:list all tests with short descriptions
<br>
query3: something 3
<br>
query4: something 4
<br>
<p>this way nobody is overwhelmed with extra information but have an easy 
<br>
access to more detailed info
<br>
<p>thank you,
<br>
Anya
<br>
<p>Jeff Squyres wrote On 07/20/06 18:10,:
<br>
<span class="quotelev1">&gt; This looks great!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only addition that I would ask for is some kind of executive summary at
</span><br>
<span class="quotelev1">&gt; the top so that developers can look at one small portion of data and see if
</span><br>
<span class="quotelev1">&gt; they need to look any further.  One of the Big Goals of MTT was to avoid
</span><br>
<span class="quotelev1">&gt; overloading the developers w/ information by only sending out &quot;interesting&quot;
</span><br>
<span class="quotelev1">&gt; results (read: failures).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically, we might want to have one or more e-mails, each with varying
</span><br>
<span class="quotelev1">&gt; levels of detail:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. The executive summary (probably with links for more detail)
</span><br>
<span class="quotelev1">&gt; 2. All of #1 plus all failures
</span><br>
<span class="quotelev1">&gt; 3. All of #2 plus short version of successes
</span><br>
<span class="quotelev1">&gt; 4. ....?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I anticipate that since we have such a wide variety of developers, some will
</span><br>
<span class="quotelev1">&gt; [greatly] prefer the different levels of information.  I, for example, will
</span><br>
<span class="quotelev1">&gt; probably prefer #3, while Graham Fagg will likely prefer #1.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, if this is overshooting the immediate goals of getting it running,
</span><br>
<span class="quotelev1">&gt; no problem -- let's go with something like #2 or #3 and splitting it apart
</span><br>
<span class="quotelev1">&gt; later.  Lots of useful feature possibilities here after it's all
</span><br>
<span class="quotelev1">&gt; working/giving good results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/20/06 5:33 PM, &quot;Ethan Mallove&quot; &lt;Ethan.Mallove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Here's a draft for a nightly test results email format. One
</span><br>
<span class="quotelev2">&gt;&gt;will receive reports through mtt-results_at_open-mpi.org.
</span><br>
<span class="quotelev2">&gt;&gt;Note: The following is a faux-report. Just pretend there is
</span><br>
<span class="quotelev2">&gt;&gt;nothing non-sensical about the data.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;This might be better sent as an attachment, or a link to a
</span><br>
<span class="quotelev2">&gt;&gt;webpage as lots of email clients have default textwidth
</span><br>
<span class="quotelev2">&gt;&gt;settings that will make the formatted tables look like
</span><br>
<span class="quotelev2">&gt;&gt;gobbledygook.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;We are also planning a webpage frontend (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt;www.open-mpi.org/mtt-results.php) to the test results with
</span><br>
<span class="quotelev2">&gt;&gt;more flexibility in generating reports than this static
</span><br>
<span class="quotelev2">&gt;&gt;email report. In other words, we're leaving out lots of
</span><br>
<span class="quotelev2">&gt;&gt;bells and whistles here as those will be implemented in the
</span><br>
<span class="quotelev2">&gt;&gt;webpage frontend.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;======
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Subject: Test results for &lt;datestamp&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Body:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;* Failed MPI Install(s)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;os_version: SunOS 5.10
</span><br>
<span class="quotelev2">&gt;&gt;platform_hardware: i86pc
</span><br>
<span class="quotelev2">&gt;&gt;platform_id: Sun's Cluster
</span><br>
<span class="quotelev2">&gt;&gt;mpi_name: ompi-nightly-v1.0
</span><br>
<span class="quotelev2">&gt;&gt;mpi_version: 1.0.3a1r10793
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mtt/mpi_install_logs/config.log.<timestamp">http://www.open-mpi.org/mtt/mpi_install_logs/config.log.<timestamp</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mtt/mpi_install_logs/make.log.<timestamp">http://www.open-mpi.org/mtt/mpi_install_logs/make.log.<timestamp</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;* Failed Test Build(s)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;os_version: SunOS 5.10
</span><br>
<span class="quotelev2">&gt;&gt;platform_hardware: i86pc
</span><br>
<span class="quotelev2">&gt;&gt;platform_id: Sun's Cluster
</span><br>
<span class="quotelev2">&gt;&gt;mpi_name: ompi-nightly-v1.0
</span><br>
<span class="quotelev2">&gt;&gt;mpi_version: 1.0.3a1r10793
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;+----+------------+---------+------------------------+
</span><br>
<span class="quotelev2">&gt;&gt;| #  |    time    |   cat   |          name          |
</span><br>
<span class="quotelev2">&gt;&gt;+----+------------+---------+------------------------+
</span><br>
<span class="quotelev2">&gt;&gt;| 1  | 2006-07-20 | ibm     | test_abc               |
</span><br>
<span class="quotelev2">&gt;&gt;| 2  | 2006-07-20 | ibm     | test_xyz               |
</span><br>
<span class="quotelev2">&gt;&gt;| 3  | 2006-07-20 | intel   | test_123               |
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[snip] ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[1]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;environment: foo = bar
</span><br>
<span class="quotelev2">&gt;&gt;compiler_flags: -g -fugly-complex -fno-globals -Wno-globals -Isrc -I.
</span><br>
<span class="quotelev2">&gt;&gt;stderr: blah blah blah
</span><br>
<span class="quotelev2">&gt;&gt;stdout: blah blah blah
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;* Failed Test Run(s)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;os_version: SunOS 5.10
</span><br>
<span class="quotelev2">&gt;&gt;platform_hardware: i86pc
</span><br>
<span class="quotelev2">&gt;&gt;platform_id: Sun's Cluster
</span><br>
<span class="quotelev2">&gt;&gt;mpi_name: ompi-nightly-v1.0
</span><br>
<span class="quotelev2">&gt;&gt;mpi_version: 1.0.3a1r10793
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;+----+------------+---------+------------------------+
</span><br>
<span class="quotelev2">&gt;&gt;| #  |    time    |   cat   |          name          |
</span><br>
<span class="quotelev2">&gt;&gt;+----+------------+---------+------------------------+
</span><br>
<span class="quotelev2">&gt;&gt;| 1  | 2006-07-20 | ibm     | zero1                  |
</span><br>
<span class="quotelev2">&gt;&gt;| 2  | 2006-07-20 | ibm     | spawn                  |
</span><br>
<span class="quotelev2">&gt;&gt;| 3  | 2006-07-20 | ibm     | spawn_multiple         |
</span><br>
<span class="quotelev2">&gt;&gt;| 4  | 2006-07-20 | ibm     | abort                  |
</span><br>
<span class="quotelev2">&gt;&gt;| 5  | 2006-07-20 | ibm     | final                  |
</span><br>
<span class="quotelev2">&gt;&gt;| 6  | 2006-07-20 | intel   | init_thread_funneled   |
</span><br>
<span class="quotelev2">&gt;&gt;| 7  | 2006-07-20 | intel   | init_thread_serialized |
</span><br>
<span class="quotelev2">&gt;&gt;| 8  | 2006-07-20 | intel   | init_thread_multiple   |
</span><br>
<span class="quotelev2">&gt;&gt;| 9  | 2006-07-20 | imb     | range                  |
</span><br>
<span class="quotelev2">&gt;&gt;| 10 | 2006-07-20 | imb     | cart                   |
</span><br>
<span class="quotelev2">&gt;&gt;| 11 | 2006-07-20 | imb     | graph                  |
</span><br>
<span class="quotelev2">&gt;&gt;| 12 | 2006-07-20 | imb     | sub                    |
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[snip] ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;* Failed Test Run Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[1]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;environment: foo = bar
</span><br>
<span class="quotelev2">&gt;&gt;test_command: mpirun -np 2 --prefix
</span><br>
<span class="quotelev2">&gt;&gt;/workspace/em162155/hpc/mtt/trunk/installs/ompi-nightly-v1.0/solaris_i386/inst
</span><br>
<span class="quotelev2">&gt;&gt;all
</span><br>
<span class="quotelev2">&gt;&gt;./zero1
</span><br>
<span class="quotelev2">&gt;&gt;stderr: blah blah blah
</span><br>
<span class="quotelev2">&gt;&gt;stdout: blah blah blah
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[2]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;environment: foo = bar
</span><br>
<span class="quotelev2">&gt;&gt;test_command: mpirun -np 2 --prefix
</span><br>
<span class="quotelev2">&gt;&gt;/workspace/em162155/hpc/mtt/trunk/installs/ompi-nightly-v1.0/solaris_i386/inst
</span><br>
<span class="quotelev2">&gt;&gt;all
</span><br>
<span class="quotelev2">&gt;&gt;./spawn
</span><br>
<span class="quotelev2">&gt;&gt;stderr: blah blah blah
</span><br>
<span class="quotelev2">&gt;&gt;stdout: blah blah blah
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[snip] ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;* Failed Test(s)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;os_version: Linux
</span><br>
<span class="quotelev2">&gt;&gt;platform_hardware: i86pc
</span><br>
<span class="quotelev2">&gt;&gt;platform_id: IU Odin Cluster
</span><br>
<span class="quotelev2">&gt;&gt;mpi_name: ompi-nightly-v1.0
</span><br>
<span class="quotelev2">&gt;&gt;mpi_version: 1.0.3a1r10793
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;+----+------------+---------+------------------------+
</span><br>
<span class="quotelev2">&gt;&gt;| #  |    time    |   cat   |          name          |
</span><br>
<span class="quotelev2">&gt;&gt;+----+------------+---------+------------------------+
</span><br>
<span class="quotelev2">&gt;&gt;| 1  | 2006-07-20 | ibm     | zero1                  |
</span><br>
<span class="quotelev2">&gt;&gt;| 2  | 2006-07-20 | ibm     | spawn                  |
</span><br>
<span class="quotelev2">&gt;&gt;| 3  | 2006-07-20 | ibm     | spawn_multiple         |
</span><br>
<span class="quotelev2">&gt;&gt;| 9  | 2006-07-20 | imb     | range                  |
</span><br>
<span class="quotelev2">&gt;&gt;| 12 | 2006-07-20 | imb     | sub                    |
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[snip] ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;* Failed Test Details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[1]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;environment: foo = bar
</span><br>
<span class="quotelev2">&gt;&gt;test_command: mpirun -np 2 --prefix
</span><br>
<span class="quotelev2">&gt;&gt;/workspace/em162155/hpc/mtt/trunk/installs/ompi-nightly-v1.0/solaris_i386/inst
</span><br>
<span class="quotelev2">&gt;&gt;all
</span><br>
<span class="quotelev2">&gt;&gt;./zero1
</span><br>
<span class="quotelev2">&gt;&gt;stderr: blah blah blah
</span><br>
<span class="quotelev2">&gt;&gt;stdout: blah blah blah
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[2]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;environment: foo = bar
</span><br>
<span class="quotelev2">&gt;&gt;test_command: mpirun -np 2 --prefix
</span><br>
<span class="quotelev2">&gt;&gt;/workspace/em162155/hpc/mtt/trunk/installs/ompi-nightly-v1.0/solaris_i386/inst
</span><br>
<span class="quotelev2">&gt;&gt;all
</span><br>
<span class="quotelev2">&gt;&gt;./spawn
</span><br>
<span class="quotelev2">&gt;&gt;stderr: blah blah blah
</span><br>
<span class="quotelev2">&gt;&gt;stdout: blah blah blah
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[snip] ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;======
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;* Passed Test Run(s)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;os_version: SunOS 5.10
</span><br>
<span class="quotelev2">&gt;&gt;platform_hardware: i86pc
</span><br>
<span class="quotelev2">&gt;&gt;platform_id: Sun's Cluster
</span><br>
<span class="quotelev2">&gt;&gt;mpi_name: ompi-nightly-v1.0
</span><br>
<span class="quotelev2">&gt;&gt;mpi_version: 1.0.3a1r10793
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;+----+------------+---------+-------------------------+
</span><br>
<span class="quotelev2">&gt;&gt;|  # |    time    |   cat   |          name           |
</span><br>
<span class="quotelev2">&gt;&gt;+----+------------+---------+-------------------------+
</span><br>
<span class="quotelev2">&gt;&gt;|  3 | 2006-07-17 | trivial | f77_hello               |
</span><br>
<span class="quotelev2">&gt;&gt;| 32 | 2006-07-20 | ibm     | allgatherv_in_place     |
</span><br>
<span class="quotelev2">&gt;&gt;| 33 | 2006-07-20 | ibm     | allreduce               |
</span><br>
<span class="quotelev2">&gt;&gt;| 34 | 2006-07-20 | ibm     | allreduce_in_place      |
</span><br>
<span class="quotelev2">&gt;&gt;| 35 | 2006-07-20 | ibm     | alltoall                |
</span><br>
<span class="quotelev2">&gt;&gt;| 36 | 2006-07-20 | intel   | alltoallw               |
</span><br>
<span class="quotelev2">&gt;&gt;| 37 | 2006-07-20 | intel   | barrier                 |
</span><br>
<span class="quotelev2">&gt;&gt;| 38 | 2006-07-20 | intel   | bcast                   |
</span><br>
<span class="quotelev2">&gt;&gt;| 39 | 2006-07-20 | imb     | bcast_struct            |
</span><br>
<span class="quotelev2">&gt;&gt;| 40 | 2006-07-20 | imb     | exscan                  |
</span><br>
<span class="quotelev2">&gt;&gt;| 41 | 2006-07-20 | imb     | gather                  |
</span><br>
<span class="quotelev2">&gt;&gt;| 42 | 2006-07-20 | imb     | gather_in_place         |
</span><br>
<span class="quotelev2">&gt;&gt;| 43 | 2006-07-20 | imb     | gatherv                 |
</span><br>
<span class="quotelev2">&gt;&gt;| 44 | 2006-07-20 | imb     | gatherv_in_place        |
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[snip] ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;os_version: Linux
</span><br>
<span class="quotelev2">&gt;&gt;platform_hardware: i86pc
</span><br>
<span class="quotelev2">&gt;&gt;platform_id: IU Odin Cluster
</span><br>
<span class="quotelev2">&gt;&gt;mpi_name: ompi-nightly-v1.0
</span><br>
<span class="quotelev2">&gt;&gt;mpi_version: 1.0.3a1r10793
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;+----+------------+---------+-------------------------+
</span><br>
<span class="quotelev2">&gt;&gt;|  # |    time    |   cat   |          name           |
</span><br>
<span class="quotelev2">&gt;&gt;+----+------------+---------+-------------------------+
</span><br>
<span class="quotelev2">&gt;&gt;|  3 | 2006-07-17 | trivial | f77_hello               |
</span><br>
<span class="quotelev2">&gt;&gt;| 32 | 2006-07-20 | ibm     | allgatherv_in_place     |
</span><br>
<span class="quotelev2">&gt;&gt;| 33 | 2006-07-20 | ibm     | allreduce               |
</span><br>
<span class="quotelev2">&gt;&gt;| 34 | 2006-07-20 | ibm     | allreduce_in_place      |
</span><br>
<span class="quotelev2">&gt;&gt;| 35 | 2006-07-20 | ibm     | alltoall                |
</span><br>
<span class="quotelev2">&gt;&gt;| 36 | 2006-07-20 | intel   | alltoallw               |
</span><br>
<span class="quotelev2">&gt;&gt;| 37 | 2006-07-20 | intel   | barrier                 |
</span><br>
<span class="quotelev2">&gt;&gt;| 38 | 2006-07-20 | intel   | bcast                   |
</span><br>
<span class="quotelev2">&gt;&gt;| 39 | 2006-07-20 | imb     | bcast_struct            |
</span><br>
<span class="quotelev2">&gt;&gt;| 40 | 2006-07-20 | imb     | exscan                  |
</span><br>
<span class="quotelev2">&gt;&gt;| 41 | 2006-07-20 | imb     | gather                  |
</span><br>
<span class="quotelev2">&gt;&gt;| 42 | 2006-07-20 | imb     | gather_in_place         |
</span><br>
<span class="quotelev2">&gt;&gt;| 43 | 2006-07-20 | imb     | gatherv                 |
</span><br>
<span class="quotelev2">&gt;&gt;| 44 | 2006-07-20 | imb     | gatherv_in_place        |
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[snip] ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;mtt-results mailing list
</span><br>
<span class="quotelev2">&gt;&gt;mtt-results_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-results">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-results</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0050.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<li><strong>Previous message:</strong> <a href="0048.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<li><strong>In reply to:</strong> <a href="0048.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0050.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
<li><strong>Reply:</strong> <a href="0050.php">Jeff Squyres: "Re: [MTT users] nightly results format"</a>
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

<?
$subject_val = "Re: [OMPI users] OpenMPI and OAR issues";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 15:31:35 2008" -->
<!-- isoreceived="20081106203135" -->
<!-- sent="Thu, 6 Nov 2008 15:31:27 -0500" -->
<!-- isosent="20081106203127" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and OAR issues" -->
<!-- id="06F9C011-40C1-421B-8ACF-C61494BB242B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1018A8FF-DA7D-49E4-9CF0-B2250A820B36_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and OAR issues<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 15:31:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7232.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>Previous message:</strong> <a href="7230.php">Ralph Castain: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>In reply to:</strong> <a href="7230.php">Ralph Castain: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7232.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>Reply:</strong> <a href="7232.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>Reply:</strong> <a href="7233.php">Ralph Castain: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OAR is the batch scheduler used on the Grid5K platform. As far as I  
<br>
know, set is a basic shell internal command, and it is understood by  
<br>
all shells. The problem here seems to be that somehow we're using  
<br>
bash, but with a tcsh shell code (because setenv is definitively not  
<br>
something that bash understand).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 6, 2008, at 3:07 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I have no idea what &quot;oar&quot; is, but it looks to me like the rsh  
</span><br>
<span class="quotelev1">&gt; launcher is getting confused about the remote shell it will use - I  
</span><br>
<span class="quotelev1">&gt; don't believe that the &quot;set&quot; cmd shown below is proper bash syntax,  
</span><br>
<span class="quotelev1">&gt; and that is the error that is causing the launch to fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What remote shell should it fine? I know we don't have any &quot;oar&quot;  
</span><br>
<span class="quotelev1">&gt; shell-specific code in the system, but maybe it looks like something  
</span><br>
<span class="quotelev1">&gt; else?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 6, 2008, at 12:55 PM, Andrea Pellegrini wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to run an openmpi application on a oar cluster. I think  
</span><br>
<span class="quotelev2">&gt;&gt; the cluster is configured correctly but I still have problems when  
</span><br>
<span class="quotelev2">&gt;&gt; I run mpirun:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; apellegr_at_m45-037:~$ mpirun -prefix /n/poolfs/z/home/apellegr/ 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi -machinefile $OAR_FILE_NODES -mca pls_rsh_agent &quot;oarsh&quot; -np  
</span><br>
<span class="quotelev2">&gt;&gt; 10 /n/poolfs/z/home/apellegr/mpi_test/hello_world.x86 bash: -c:  
</span><br>
<span class="quotelev2">&gt;&gt; line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev2">&gt;&gt; bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev2">&gt;&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev2">&gt;&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev2">&gt;&gt; bootproxy 1 --name 0.0.4 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev2">&gt;&gt; m45-040.pool --universe apellegr_at_m45-037.pool:default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-29482 --nsreplica &quot;0.0.0;tcp://10.11.45.37:36790&quot; -- 
</span><br>
<span class="quotelev2">&gt;&gt; gprreplica &quot;0.0.0;tcp://10.11.45.37:36790&quot;'
</span><br>
<span class="quotelev2">&gt;&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev2">&gt;&gt; bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev2">&gt;&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev2">&gt;&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev2">&gt;&gt; bootproxy 1 --name 0.0.2 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev2">&gt;&gt; m45-038.pool --universe apellegr_at_m45-037.pool:default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-29482 --nsreplica &quot;0.0.0;tcp://10.11.45.37:36790&quot; -- 
</span><br>
<span class="quotelev2">&gt;&gt; gprreplica &quot;0.0.0;tcp://10.11.45.37:36790&quot;'
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] ERROR: A daemon on node m45-038.pool failed to  
</span><br>
<span class="quotelev2">&gt;&gt; start as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] ERROR: There may be more information available  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev2">&gt;&gt; status 2.
</span><br>
<span class="quotelev2">&gt;&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev2">&gt;&gt; bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev2">&gt;&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev2">&gt;&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev2">&gt;&gt; bootproxy 1 --name 0.0.3 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev2">&gt;&gt; m45-039.pool --universe apellegr_at_m45-037.pool:default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-29482 --nsreplica &quot;0.0.0;tcp://10.11.45.37:36790&quot; -- 
</span><br>
<span class="quotelev2">&gt;&gt; gprreplica &quot;0.0.0;tcp://10.11.45.37:36790&quot;'
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] ERROR: A daemon on node m45-039.pool failed to  
</span><br>
<span class="quotelev2">&gt;&gt; start as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] ERROR: There may be more information available  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev2">&gt;&gt; status 2.
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../../orte/mca/pls/base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../../../orte/mca/pls/rsh/pls_rsh_module.c at line 1158
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../../../orte/mca/errmgr/hnp/errmgr_hnp.c at line 90
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] ERROR: A daemon on node m45-040.pool failed to  
</span><br>
<span class="quotelev2">&gt;&gt; start as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] ERROR: There may be more information available  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev2">&gt;&gt; status 2.
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../../orte/mca/pls/base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29482] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../../../orte/mca/pls/rsh/pls_rsh_module.c at line 1190
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to cleanly terminate the daemons for this job.  
</span><br>
<span class="quotelev2">&gt;&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; apellegr_at_m45-037:~$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I run it with the option &quot;-mca pls_rsh_debug 1&quot; I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; apellegr_at_m45-037:~$ mpirun -prefix /n/poolfs/z/home/apellegr/ 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi -machinefile $OAR_FILE_NODES -mca pls_rsh_debug 1 -mca  
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_agent &quot;oarsh&quot; -np 10 /n/poolfs/z/home/apellegr/mpi_test/ 
</span><br>
<span class="quotelev2">&gt;&gt; hello_world.x86
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: local shell: 2 (tcsh)
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: assuming same remote shell as local  
</span><br>
<span class="quotelev2">&gt;&gt; shell
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: remote shell: 2 (tcsh)
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: final template argv:
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh:     /usr/bin/oarsh &lt;template&gt; orted -- 
</span><br>
<span class="quotelev2">&gt;&gt; bootproxy 1 --name &lt;template&gt; --num_procs 5 --vpid_start 0 -- 
</span><br>
<span class="quotelev2">&gt;&gt; nodename &lt;template&gt; --universe apellegr_at_m45-037.pool:default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-29473 --nsreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; -- 
</span><br>
<span class="quotelev2">&gt;&gt; gprreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot;
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: launching on node m45-037.pool
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: m45-037.pool is a LOCAL node
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: reset PATH: /n/poolfs/z/home/apellegr/ 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/ 
</span><br>
<span class="quotelev2">&gt;&gt; sbin:/bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/bin:/n/ 
</span><br>
<span class="quotelev2">&gt;&gt; poolfs/z/home/apellegr/openssl/bin
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: reset LD_LIBRARY_PATH: /n/poolfs/z/ 
</span><br>
<span class="quotelev2">&gt;&gt; home/apellegr/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: changing to directory /home/apellegr
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: executing: (/n/poolfs/z/home/apellegr/ 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/bin/orted) orted --bootproxy 1 --name 0.0.1 --num_procs 5 -- 
</span><br>
<span class="quotelev2">&gt;&gt; vpid_start 0 --nodename m45-037.pool --universe  
</span><br>
<span class="quotelev2">&gt;&gt; apellegr_at_m45-037.pool:default-universe-29473 --nsreplica  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0.0.0;tcp://10.11.45.37:55477&quot; --gprreplica &quot;0.0.0;tcp:// 
</span><br>
<span class="quotelev2">&gt;&gt; 10.11.45.37:55477&quot; --set-sid [OAR_JOBID=597856 HOST=m45-037.pool  
</span><br>
<span class="quotelev2">&gt;&gt; TERM=xterm SHELL=/bin/tcsh OAR_WORKING_DIRECTORY=/home/apellegr  
</span><br>
<span class="quotelev2">&gt;&gt; SSH_CLIENT=10.11.0.4 50481 6667 OAR_USER=apellegr GROUP=csestudents  
</span><br>
<span class="quotelev2">&gt;&gt; USER=apellegr SUDO_USER=oar OAR_WORKDIR=/home/apellegr  
</span><br>
<span class="quotelev2">&gt;&gt; SUDO_UID=30143 HOSTTYPE=i486-linux USERNAME=apellegr OAR_JOB_NAME=  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_NODE_FILE=/var/lib/oar/597856 OAR_RESOURCE_PROPERTIES_FILE=/var/ 
</span><br>
<span class="quotelev2">&gt;&gt; lib/oar/597856_resources MAIL=/var/mail/oar PATH=/n/poolfs/z/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr/openmpi/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin:/n/poolfs/z/home/apellegr/openssl/bin OAR_PROJECT_NAME=default  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_JOB_WALLTIME_SECONDS=7200 PWD=/home/apellegr HOME=/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr SUDO_COMMAND=OAR SHLVL=2 OAR_FILE_NODES=/var/lib/oar/ 
</span><br>
<span class="quotelev2">&gt;&gt; 597856 OSTYPE=linux VENDOR=intel OAR_JOB_WALLTIME=2:0:0  
</span><br>
<span class="quotelev2">&gt;&gt; MACHTYPE=i486 LOGNAME=apellegr OAR_NODEFILE=/var/lib/oar/597856  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_RESOURCE_FILE=/var/lib/oar/597856 SUDO_GID=390  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_JOB_ID=597856 OAR_O_WORKDIR=/home/apellegr _=/n/poolfs/z/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr/openmpi/bin/mpirun OLDPWD=/home/apellegr/openmpi  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_rds_hostfile_path=/var/lib/oar/597856  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_pls_rsh_debug=1 OMPI_MCA_pls_rsh_agent=oarsh  
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/n/poolfs/z/home/apellegr/openmpi/lib  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_seed=0]
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: launching on node m45-038.pool
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: m45-038.pool is a REMOTE node
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: executing: (//usr/bin/oarsh) /usr/bin/ 
</span><br>
<span class="quotelev2">&gt;&gt; oarsh m45-038.pool  set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev2">&gt;&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev2">&gt;&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev2">&gt;&gt; bootproxy 1 --name 0.0.2 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev2">&gt;&gt; m45-038.pool --universe apellegr_at_m45-037.pool:default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-29473 --nsreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; -- 
</span><br>
<span class="quotelev2">&gt;&gt; gprreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; [OAR_JOBID=597856  
</span><br>
<span class="quotelev2">&gt;&gt; HOST=m45-037.pool TERM=xterm SHELL=/bin/tcsh OAR_WORKING_DIRECTORY=/ 
</span><br>
<span class="quotelev2">&gt;&gt; home/apellegr SSH_CLIENT=10.11.0.4 50481 6667 OAR_USER=apellegr  
</span><br>
<span class="quotelev2">&gt;&gt; GROUP=csestudents USER=apellegr SUDO_USER=oar OAR_WORKDIR=/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr SUDO_UID=30143 HOSTTYPE=i486-linux USERNAME=apellegr  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_JOB_NAME= OAR_NODE_FILE=/var/lib/oar/597856  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_RESOURCE_PROPERTIES_FILE=/var/lib/oar/597856_resources MAIL=/ 
</span><br>
<span class="quotelev2">&gt;&gt; var/mail/oar PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin:/n/poolfs/z/home/apellegr/openssl/bin OAR_PROJECT_NAME=default  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_JOB_WALLTIME_SECONDS=7200 PWD=/home/apellegr HOME=/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr SUDO_COMMAND=OAR SHLVL=2 OAR_FILE_NODES=/var/lib/oar/ 
</span><br>
<span class="quotelev2">&gt;&gt; 597856 OSTYPE=linux VENDOR=intel OAR_JOB_WALLTIME=2:0:0  
</span><br>
<span class="quotelev2">&gt;&gt; MACHTYPE=i486 LOGNAME=apellegr OAR_NODEFILE=/var/lib/oar/597856  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_RESOURCE_FILE=/var/lib/oar/597856 SUDO_GID=390  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_JOB_ID=597856 OAR_O_WORKDIR=/home/apellegr _=/n/poolfs/z/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr/openmpi/bin/mpirun OLDPWD=/home/apellegr/openmpi  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_rds_hostfile_path=/var/lib/oar/597856  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_pls_rsh_debug=1 OMPI_MCA_pls_rsh_agent=oarsh  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_seed=0]
</span><br>
<span class="quotelev2">&gt;&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev2">&gt;&gt; bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev2">&gt;&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev2">&gt;&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev2">&gt;&gt; bootproxy 1 --name 0.0.2 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev2">&gt;&gt; m45-038.pool --universe apellegr_at_m45-037.pool:default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-29473 --nsreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; -- 
</span><br>
<span class="quotelev2">&gt;&gt; gprreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot;'
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: launching on node m45-039.pool
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] ERROR: A daemon on node m45-038.pool failed to  
</span><br>
<span class="quotelev2">&gt;&gt; start as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] ERROR: There may be more information available  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev2">&gt;&gt; status 2.
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: m45-039.pool is a REMOTE node
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: executing: (//usr/bin/oarsh) /usr/bin/ 
</span><br>
<span class="quotelev2">&gt;&gt; oarsh m45-039.pool  set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev2">&gt;&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev2">&gt;&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev2">&gt;&gt; bootproxy 1 --name 0.0.3 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev2">&gt;&gt; m45-039.pool --universe apellegr_at_m45-037.pool:default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-29473 --nsreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; -- 
</span><br>
<span class="quotelev2">&gt;&gt; gprreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; [OAR_JOBID=597856  
</span><br>
<span class="quotelev2">&gt;&gt; HOST=m45-037.pool TERM=xterm SHELL=/bin/tcsh OAR_WORKING_DIRECTORY=/ 
</span><br>
<span class="quotelev2">&gt;&gt; home/apellegr SSH_CLIENT=10.11.0.4 50481 6667 OAR_USER=apellegr  
</span><br>
<span class="quotelev2">&gt;&gt; GROUP=csestudents USER=apellegr SUDO_USER=oar OAR_WORKDIR=/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr SUDO_UID=30143 HOSTTYPE=i486-linux USERNAME=apellegr  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_JOB_NAME= OAR_NODE_FILE=/var/lib/oar/597856  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_RESOURCE_PROPERTIES_FILE=/var/lib/oar/597856_resources MAIL=/ 
</span><br>
<span class="quotelev2">&gt;&gt; var/mail/oar PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin:/n/poolfs/z/home/apellegr/openssl/bin OAR_PROJECT_NAME=default  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_JOB_WALLTIME_SECONDS=7200 PWD=/home/apellegr HOME=/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr SUDO_COMMAND=OAR SHLVL=2 OAR_FILE_NODES=/var/lib/oar/ 
</span><br>
<span class="quotelev2">&gt;&gt; 597856 OSTYPE=linux VENDOR=intel OAR_JOB_WALLTIME=2:0:0  
</span><br>
<span class="quotelev2">&gt;&gt; MACHTYPE=i486 LOGNAME=apellegr OAR_NODEFILE=/var/lib/oar/597856  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_RESOURCE_FILE=/var/lib/oar/597856 SUDO_GID=390  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_JOB_ID=597856 OAR_O_WORKDIR=/home/apellegr _=/n/poolfs/z/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr/openmpi/bin/mpirun OLDPWD=/home/apellegr/openmpi  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_rds_hostfile_path=/var/lib/oar/597856  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_pls_rsh_debug=1 OMPI_MCA_pls_rsh_agent=oarsh  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_seed=0]
</span><br>
<span class="quotelev2">&gt;&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev2">&gt;&gt; bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev2">&gt;&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev2">&gt;&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev2">&gt;&gt; bootproxy 1 --name 0.0.3 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev2">&gt;&gt; m45-039.pool --universe apellegr_at_m45-037.pool:default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-29473 --nsreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; -- 
</span><br>
<span class="quotelev2">&gt;&gt; gprreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot;'
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: launching on node m45-040.pool
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] ERROR: A daemon on node m45-039.pool failed to  
</span><br>
<span class="quotelev2">&gt;&gt; start as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] ERROR: There may be more information available  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev2">&gt;&gt; status 2.
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: m45-040.pool is a REMOTE node
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] pls:rsh: executing: (//usr/bin/oarsh) /usr/bin/ 
</span><br>
<span class="quotelev2">&gt;&gt; oarsh m45-040.pool  set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev2">&gt;&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev2">&gt;&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev2">&gt;&gt; bootproxy 1 --name 0.0.4 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev2">&gt;&gt; m45-040.pool --universe apellegr_at_m45-037.pool:default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-29473 --nsreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; -- 
</span><br>
<span class="quotelev2">&gt;&gt; gprreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; [OAR_JOBID=597856  
</span><br>
<span class="quotelev2">&gt;&gt; HOST=m45-037.pool TERM=xterm SHELL=/bin/tcsh OAR_WORKING_DIRECTORY=/ 
</span><br>
<span class="quotelev2">&gt;&gt; home/apellegr SSH_CLIENT=10.11.0.4 50481 6667 OAR_USER=apellegr  
</span><br>
<span class="quotelev2">&gt;&gt; GROUP=csestudents USER=apellegr SUDO_USER=oar OAR_WORKDIR=/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr SUDO_UID=30143 HOSTTYPE=i486-linux USERNAME=apellegr  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_JOB_NAME= OAR_NODE_FILE=/var/lib/oar/597856  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_RESOURCE_PROPERTIES_FILE=/var/lib/oar/597856_resources MAIL=/ 
</span><br>
<span class="quotelev2">&gt;&gt; var/mail/oar PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin:/sbin:/bin:/usr/X11R6/bin:/n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin:/n/poolfs/z/home/apellegr/openssl/bin OAR_PROJECT_NAME=default  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_JOB_WALLTIME_SECONDS=7200 PWD=/home/apellegr HOME=/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr SUDO_COMMAND=OAR SHLVL=2 OAR_FILE_NODES=/var/lib/oar/ 
</span><br>
<span class="quotelev2">&gt;&gt; 597856 OSTYPE=linux VENDOR=intel OAR_JOB_WALLTIME=2:0:0  
</span><br>
<span class="quotelev2">&gt;&gt; MACHTYPE=i486 LOGNAME=apellegr OAR_NODEFILE=/var/lib/oar/597856  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_RESOURCE_FILE=/var/lib/oar/597856 SUDO_GID=390  
</span><br>
<span class="quotelev2">&gt;&gt; OAR_JOB_ID=597856 OAR_O_WORKDIR=/home/apellegr _=/n/poolfs/z/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr/openmpi/bin/mpirun OLDPWD=/home/apellegr/openmpi  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_rds_hostfile_path=/var/lib/oar/597856  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_pls_rsh_debug=1 OMPI_MCA_pls_rsh_agent=oarsh  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_seed=0]
</span><br>
<span class="quotelev2">&gt;&gt; bash: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev2">&gt;&gt; bash: -c: line 0: ` set path = ( /n/poolfs/z/home/apellegr/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if  
</span><br>
<span class="quotelev2">&gt;&gt; ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /n/poolfs/z/home/ 
</span><br>
<span class="quotelev2">&gt;&gt; apellegr/openmpi/lib ; if ( $?OMPI_have_llp == 1 ) setenv  
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH /n/poolfs/z/home/apellegr/openmpi/lib: 
</span><br>
<span class="quotelev2">&gt;&gt; $LD_LIBRARY_PATH ; /n/poolfs/z/home/apellegr/openmpi/bin/orted -- 
</span><br>
<span class="quotelev2">&gt;&gt; bootproxy 1 --name 0.0.4 --num_procs 5 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev2">&gt;&gt; m45-040.pool --universe apellegr_at_m45-037.pool:default- 
</span><br>
<span class="quotelev2">&gt;&gt; universe-29473 --nsreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot; -- 
</span><br>
<span class="quotelev2">&gt;&gt; gprreplica &quot;0.0.0;tcp://10.11.45.37:55477&quot;'
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] ERROR: A daemon on node m45-040.pool failed to  
</span><br>
<span class="quotelev2">&gt;&gt; start as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] ERROR: There may be more information available  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev2">&gt;&gt; status 2.
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../../orte/mca/pls/base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev2">&gt;&gt; [m45-037.pool:29473] [0,0,0] ORTE_ERROR_LOG: Timeout in  
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../../../orte/mca/pls/rsh/pls_rsh_module.c at line 1190
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to cleanly terminate the daemons for this job.  
</span><br>
<span class="quotelev2">&gt;&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; apellegr_at_m45-037:~$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody help me?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; ~Andrea
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7231/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7232.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>Previous message:</strong> <a href="7230.php">Ralph Castain: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>In reply to:</strong> <a href="7230.php">Ralph Castain: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7232.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>Reply:</strong> <a href="7232.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>Reply:</strong> <a href="7233.php">Ralph Castain: "Re: [OMPI users] OpenMPI and OAR issues"</a>
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

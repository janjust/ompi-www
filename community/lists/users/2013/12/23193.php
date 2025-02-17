<?
$subject_val = "Re: [OMPI users] environment variables and MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 13 19:42:58 2013" -->
<!-- isoreceived="20131214004258" -->
<!-- sent="Sat, 14 Dec 2013 00:42:34 +0000" -->
<!-- isosent="20131214004234" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] environment variables and MPI_Comm_spawn" -->
<!-- id="2D4C7CDF-CF82-4BD8-908F-7B0A7D34B03E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131213151628.453BD2D2006F_at_takeo" -->
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
<strong>Subject:</strong> Re: [OMPI users] environment variables and MPI_Comm_spawn<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-13 19:42:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23194.php">Siddhartha Jana: "[OMPI users] Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Previous message:</strong> <a href="23192.php">tom fogal: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="23192.php">tom fogal: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23257.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="23257.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the first 2 patches, Tom -- I applied them to the SVN trunk and scheduled them to go into the v1.7 series.  I don't know if they'll make 1.7.4 or be pushed to 1.7.5, but they'll get there.
<br>
<p>I'll defer to Ralph for the rest of the discussion about info keys.
<br>
<p><p>On Dec 13, 2013, at 9:16 AM, tom fogal &lt;tfogal_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph, thanks for your help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain writes:
</span><br>
<span class="quotelev2">&gt;&gt; It would have to be done via MPI_Info arguments, and we never had a
</span><br>
<span class="quotelev2">&gt;&gt; request to do so (and hence, don't define such an argument). It would
</span><br>
<span class="quotelev2">&gt;&gt; be easy enough to do so (look in the ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev2">&gt;&gt; code).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, I wanted to just report success, but I've only got the easy
</span><br>
<span class="quotelev1">&gt; side of it: saving the arguments from the MPI_Info arguments into
</span><br>
<span class="quotelev1">&gt; the orte_job_t struct.  See attached &quot;0003&quot; patch (against trunk).
</span><br>
<span class="quotelev1">&gt; However, I couldn't figure out how to get the other side: reading out
</span><br>
<span class="quotelev1">&gt; the environment variables and setting them at fork.  Maybe you could
</span><br>
<span class="quotelev1">&gt; help with (or do :-) that?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or just guide me as to where again: I threw abort()s in 'spawn'
</span><br>
<span class="quotelev1">&gt; functions I found under plm/, but my programs didn't abort and so I'm
</span><br>
<span class="quotelev1">&gt; not sure where they went.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI implementations generally don't forcibly propagate envars because
</span><br>
<span class="quotelev2">&gt;&gt; it is so hard to know which ones to handle - it is easy to propagate
</span><br>
<span class="quotelev2">&gt;&gt; a system envar that causes bad things to happen on the remote end.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand.  Though in this case, I'm /trying/ to make Bad Things
</span><br>
<span class="quotelev1">&gt; (tm) happen ;-).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One thing you could do, of course, is add that envar to your default
</span><br>
<span class="quotelev2">&gt;&gt; shell setup (.bashrc or whatever). This would set the variable by
</span><br>
<span class="quotelev2">&gt;&gt; default on your remote locations (assuming you are using rsh/ssh
</span><br>
<span class="quotelev2">&gt;&gt; for your launcher), and then any process you start would get
</span><br>
<span class="quotelev2">&gt;&gt; it. However, that won't help if this is an envar intended only for
</span><br>
<span class="quotelev2">&gt;&gt; the comm_spawned process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately what I want to play with at the moment are LD_*
</span><br>
<span class="quotelev1">&gt; variables, and fiddling with these in my .bashrc will mess up a lot
</span><br>
<span class="quotelev1">&gt; more than just the simulation I am presently hacking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can add this capability to the OMPI trunk, and port it to the 1.7
</span><br>
<span class="quotelev2">&gt;&gt; release - but we don't go all the way back to the 1.4 series any
</span><br>
<span class="quotelev2">&gt;&gt; more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, having this in a 1.7 release would be great!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, I encountered a couple other small things while grepping through
</span><br>
<span class="quotelev1">&gt; source/waiting for trunk to build, so there are two other small patches
</span><br>
<span class="quotelev1">&gt; attached.  One gets rid of warnings about unused functions in generated
</span><br>
<span class="quotelev1">&gt; lexing code.  I believe the second fixes resource leaks on error paths.
</span><br>
<span class="quotelev1">&gt; However, it turned out none of my user-level code hit that function at
</span><br>
<span class="quotelev1">&gt; all, so I haven't been able to test it.  Take from it what you will...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -tom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Dec 11, 2013 at 2:10 PM, tom fogal &lt;tfogal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm developing on Open MPI 1.4.5-ubuntu2 on Ubuntu 13.10 (so, Ubuntu's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; packaged Open MPI) at the moment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd like to pass environment variables to processes started via
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_spawn.  Unfortunately, the MPI 3.0 standard (at least) does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not seem to specify a way to do this; thus I have been searching for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation-specific ways to accomplish my task.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have tried setting the environment variable using the POSIX setenv(3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call, but it seems that Open MPI comm-spawn'd processes do not inherit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment variables.  See the attached 2 C99 programs; one prints
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out the environment it receives, and one sets the MEANING_OF_LIFE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment variable, spawns the previous 'env printing' program, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exits.  I run via:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $ env -i HOME=/home/tfogal \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  PATH=/bin:/usr/bin:/usr/local/bin:/sbin:/usr/sbin \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpirun -x TJFVAR=testing -n 5 ./mpienv ./envpar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and expect (well, hope) to find the MEANING_OF_LIFE in 'envpar's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output.  I do see TJFVAR, but the MEANING_OF_LIFE sadly does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; propagate.  Perhaps I am asking the wrong question...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found another MPI implementation which allowed passing such
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information via the MPI_Info argument, however I could find no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; documentation of similar functionality in Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way to accomplish what I'm looking for?  I could even be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; convinced to hack source, but a starting pointer would be appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -tom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From 8285a7625e5ea014b9d4df5dd65a7642fd4bc322 Mon Sep 17 00:00:00 2001
</span><br>
<span class="quotelev1">&gt; From: Tom Fogal &lt;tfogal_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Fri, 13 Dec 2013 12:03:56 +0100
</span><br>
<span class="quotelev1">&gt; Subject: [PATCH 1/3] btl: Remove warnings about unused lexing functions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib_lex.l | 2 ++
</span><br>
<span class="quotelev1">&gt; 1 file changed, 2 insertions(+)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/btl/openib/btl_openib_lex.l b/ompi/mca/btl/openib/btl_openib_lex.l
</span><br>
<span class="quotelev1">&gt; index 2aa6059..7455b78 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/btl/openib/btl_openib_lex.l
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/btl/openib/btl_openib_lex.l
</span><br>
<span class="quotelev1">&gt; @@ -1,3 +1,5 @@
</span><br>
<span class="quotelev1">&gt; +%option nounput
</span><br>
<span class="quotelev1">&gt; +%option noinput
</span><br>
<span class="quotelev1">&gt; %{ /* -*- C -*- */
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 1.8.3.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From dff9fd5ef69f09de6d0fee2236c39a79e8674f92 Mon Sep 17 00:00:00 2001
</span><br>
<span class="quotelev1">&gt; From: Tom Fogal &lt;tfogal_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Fri, 13 Dec 2013 13:06:41 +0100
</span><br>
<span class="quotelev1">&gt; Subject: [PATCH 2/3] mca: cleanup buf, ps when errors occur.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; orte/mca/plm/base/plm_base_proxy.c | 4 +++-
</span><br>
<span class="quotelev1">&gt; 1 file changed, 3 insertions(+), 1 deletion(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/plm/base/plm_base_proxy.c b/orte/mca/plm/base/plm_base_proxy.c
</span><br>
<span class="quotelev1">&gt; index 5d2b100..275cb3a 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/plm/base/plm_base_proxy.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/plm/base/plm_base_proxy.c
</span><br>
<span class="quotelev1">&gt; @@ -128,14 +128,15 @@ int orte_plm_proxy_spawn(orte_job_t *jdata)
</span><br>
<span class="quotelev1">&gt;     command = ORTE_PLM_LAUNCH_JOB_CMD;
</span><br>
<span class="quotelev1">&gt;     if (ORTE_SUCCESS != (rc = opal_dss.pack(buf, &amp;command, 1, ORTE_PLM_CMD))) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; +        OBJ_RELEASE(buf);
</span><br>
<span class="quotelev1">&gt;         goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* pack the jdata object */
</span><br>
<span class="quotelev1">&gt;     if (ORTE_SUCCESS != (rc = opal_dss.pack(buf, &amp;jdata, 1, ORTE_JOB))) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; +        OBJ_RELEASE(buf);
</span><br>
<span class="quotelev1">&gt;         goto CLEANUP;
</span><br>
<span class="quotelev1">&gt; -        
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* create the proxy spawn object */
</span><br>
<span class="quotelev1">&gt; @@ -153,6 +154,7 @@ int orte_plm_proxy_spawn(orte_job_t *jdata)
</span><br>
<span class="quotelev1">&gt;                                           orte_rml_send_callback, NULL))) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(buf);
</span><br>
<span class="quotelev1">&gt; +        OBJ_RELEASE(ps);
</span><br>
<span class="quotelev1">&gt;         goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 1.8.3.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From a90f1fb49df1ff9442476b5e4294353ebb94498b Mon Sep 17 00:00:00 2001
</span><br>
<span class="quotelev1">&gt; From: Tom Fogal &lt;tfogal_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Fri, 13 Dec 2013 15:09:10 +0100
</span><br>
<span class="quotelev1">&gt; Subject: [PATCH 3/3] info: accept env vars desired in child processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This looks for &quot;env&quot; keys in MPI_Info structures, which should be
</span><br>
<span class="quotelev1">&gt; then used to forward environment variables from parent to child
</span><br>
<span class="quotelev1">&gt; when spawning jobs.  However, note this doesn't (yet) change the
</span><br>
<span class="quotelev1">&gt; spawn machinery.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; ompi/mca/dpm/orte/dpm_orte.c | 12 ++++++++++++
</span><br>
<span class="quotelev1">&gt; orte/runtime/orte_globals.c  |  2 ++
</span><br>
<span class="quotelev1">&gt; orte/runtime/orte_globals.h  |  2 ++
</span><br>
<span class="quotelev1">&gt; 3 files changed, 16 insertions(+)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/dpm/orte/dpm_orte.c b/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev1">&gt; index 65099a5..b61d6f2 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/dpm/orte/dpm_orte.c
</span><br>
<span class="quotelev1">&gt; @@ -680,6 +680,7 @@ static int spawn(int count, const char *array_of_commands[],
</span><br>
<span class="quotelev1">&gt;     char mapper[OPAL_PATH_MAX];
</span><br>
<span class="quotelev1">&gt;     int npernode;
</span><br>
<span class="quotelev1">&gt;     char slot_list[OPAL_PATH_MAX];
</span><br>
<span class="quotelev1">&gt; +    char envvar[1024]; /* better magic number? */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     orte_job_t *jdata;
</span><br>
<span class="quotelev1">&gt;     orte_app_context_t *app;
</span><br>
<span class="quotelev1">&gt; @@ -705,6 +706,7 @@ static int spawn(int count, const char *array_of_commands[],
</span><br>
<span class="quotelev1">&gt;        - &quot;path&quot;: list of directories where to look for the executable
</span><br>
<span class="quotelev1">&gt;        - &quot;file&quot;: filename, where additional information is provided.
</span><br>
<span class="quotelev1">&gt;        - &quot;soft&quot;: see page 92 of MPI-2.
</span><br>
<span class="quotelev1">&gt; +       - &quot;env&quot;: environment variables desired in the children.
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* setup the job object */
</span><br>
<span class="quotelev1">&gt; @@ -1358,6 +1360,16 @@ static int spawn(int count, const char *array_of_commands[],
</span><br>
<span class="quotelev1">&gt;                     jdata-&gt;stdin_target = strtoul(stdin_target, NULL, 10);
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +            /* did the user want us to forward any environment variables? */
</span><br>
<span class="quotelev1">&gt; +            ompi_info_get (array_of_info[i], &quot;env&quot;, sizeof(envvar)-1, envvar,
</span><br>
<span class="quotelev1">&gt; +                           &amp;flag);
</span><br>
<span class="quotelev1">&gt; +            if ( flag ) {
</span><br>
<span class="quotelev1">&gt; +              jdata-&gt;nenv_vars++;
</span><br>
<span class="quotelev1">&gt; +              jdata-&gt;env_vars = realloc(jdata-&gt;env_vars,
</span><br>
<span class="quotelev1">&gt; +                                        jdata-&gt;nenv_vars*sizeof(char*));
</span><br>
<span class="quotelev1">&gt; +              jdata-&gt;env_vars[jdata-&gt;nenv_vars-1] = strdup(envvar);
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* default value: If the user did not tell us where to look for the
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/runtime/orte_globals.c b/orte/runtime/orte_globals.c
</span><br>
<span class="quotelev1">&gt; index f3e3029..e4ba975 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/runtime/orte_globals.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/runtime/orte_globals.c
</span><br>
<span class="quotelev1">&gt; @@ -742,6 +742,8 @@ static void orte_job_construct(orte_job_t* job)
</span><br>
<span class="quotelev1">&gt;     job-&gt;ckpt_snapshot_ref = NULL;
</span><br>
<span class="quotelev1">&gt;     job-&gt;ckpt_snapshot_loc = NULL;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; +    job-&gt;env_vars = NULL;
</span><br>
<span class="quotelev1">&gt; +    job-&gt;nenv_vars = 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void orte_job_destruct(orte_job_t* job)
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/runtime/orte_globals.h b/orte/runtime/orte_globals.h
</span><br>
<span class="quotelev1">&gt; index f284045..d12296b 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/runtime/orte_globals.h
</span><br>
<span class="quotelev1">&gt; +++ b/orte/runtime/orte_globals.h
</span><br>
<span class="quotelev1">&gt; @@ -463,6 +463,8 @@ typedef struct {
</span><br>
<span class="quotelev1">&gt;     /* snapshot location */
</span><br>
<span class="quotelev1">&gt;     char *ckpt_snapshot_loc;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; +    char** env_vars;
</span><br>
<span class="quotelev1">&gt; +    size_t nenv_vars;
</span><br>
<span class="quotelev1">&gt; } orte_job_t;
</span><br>
<span class="quotelev1">&gt; ORTE_DECLSPEC OBJ_CLASS_DECLARATION(orte_job_t);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 1.8.3.2
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23194.php">Siddhartha Jana: "[OMPI users] Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Previous message:</strong> <a href="23192.php">tom fogal: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="23192.php">tom fogal: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23257.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="23257.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
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

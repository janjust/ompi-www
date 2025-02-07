<?
$subject_val = "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 16 16:34:31 2011" -->
<!-- isoreceived="20110216213431" -->
<!-- sent="Wed, 16 Feb 2011 16:34:21 -0500" -->
<!-- isosent="20110216213421" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..." -->
<!-- id="4D5C42DD.50305_at_ldeo.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C980BE60.E616%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] This must be ssh problem, but I can't figure out what it is...<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-16 16:34:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15630.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>Previous message:</strong> <a href="15628.php">Petit, George (Cont, ARL/CISD): "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>In reply to:</strong> <a href="15626.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15631.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15631.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15634.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tena
<br>
<p>I hope somebody more knowledgeable in ssh
<br>
takes a look at the debug3 session log that you included.
<br>
<p>I can't see if/where/why ssh is failing for you in EC2.
<br>
<p>See other answers inline, please.
<br>
<p>Tena Sakai wrote:
<br>
<span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you again for your reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A slight difference is that on vixen and dashen you ran the
</span><br>
<span class="quotelev2">&gt;&gt; MPI hostname tests as a regular user, not as root, right?
</span><br>
<span class="quotelev2">&gt;&gt; Not sure if this will make much of a difference,
</span><br>
<span class="quotelev2">&gt;&gt; but it may be worth trying to run it as a regular user in EC2 also.
</span><br>
<span class="quotelev2">&gt;&gt; I general most people avoid running user applications (MPI programs
</span><br>
<span class="quotelev2">&gt;&gt; included) as root.
</span><br>
<span class="quotelev2">&gt;&gt; Mostly for safety, but I wonder if there are any
</span><br>
<span class="quotelev2">&gt;&gt; implications in the 'rootly powers'
</span><br>
<span class="quotelev2">&gt;&gt; regarding the under-the-hood processes that OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; launches along with the actual user programs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, between vixen and dahser I was doing the test as user tsakai,
</span><br>
<span class="quotelev1">&gt; not as root.  But the reason I wanted to do this test as root is
</span><br>
<span class="quotelev1">&gt; to show that it fails as regular user (generating pipe system
</span><br>
<span class="quotelev1">&gt; call failed error), whereas as root it would succeed, as it did
</span><br>
<span class="quotelev1">&gt; on Friday.  
</span><br>
<p>Sorry again.
<br>
I even wrote &quot;root can and Tena cannot&quot;, then I forgot.
<br>
Too many tasks at the same time, too much context-switching ...
<br>
<p><span class="quotelev1">&gt; The ami has not changed.  The last change on the ami
</span><br>
<span class="quotelev1">&gt; was last Tuesday.  As such I don't understand this inconsistent
</span><br>
<span class="quotelev1">&gt; behavior.  I have lots of notes from previous sessions and I
</span><br>
<span class="quotelev1">&gt; consulted different successful session logs to replicate what I
</span><br>
<span class="quotelev1">&gt; saw Friday, but with no success.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Having spent days and not getting anywhere, I decided to take a
</span><br>
<span class="quotelev1">&gt; different approach.  I instantiated a linux ami that was built by
</span><br>
<span class="quotelev1">&gt; Amazon, which feels like centos/fedora-based.  I downloaded gcc
</span><br>
<span class="quotelev1">&gt; and c++, plus openMPI 1.4.3.  After I got openMPI running, I
</span><br>
<span class="quotelev1">&gt; created an account for user tsakai, uploaded my public key, re-logged
</span><br>
<span class="quotelev1">&gt; in as user tsakai, and ran the same test.  Surprisingly (or not?) it
</span><br>
<span class="quotelev1">&gt; generated the same result.  I.e., I cannot run the same mpirun
</span><br>
<span class="quotelev1">&gt; command when there is a remote instance involved, but on itself
</span><br>
<span class="quotelev1">&gt; mpirun runs fine.  So, I am feeling that this has to be an ssh
</span><br>
<span class="quotelev1">&gt; authentication problem.  I looked at man page for ssh and ssh_config
</span><br>
<span class="quotelev1">&gt; and cannot figure out what I am doing wrong.  I put in &quot;LogLevel
</span><br>
<span class="quotelev1">&gt; DEBUG3&quot; line and it generated lots of lines, in which I found a
</span><br>
<span class="quotelev1">&gt; line:
</span><br>
<span class="quotelev1">&gt;   debug1: Authentication succeeded (publickey).
</span><br>
<span class="quotelev1">&gt; Then I see a bunch of lines that look like:
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env XXXXXXX
</span><br>
<span class="quotelev1">&gt; and mpirun hangs.  Here is the session log:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Ssh on our clusters uses host-based authentication.
<br>
I think Reuti sent you his page about it:
<br>
<a href="http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html">http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html</a>
<br>
<p>However, I believe OpenMPI shouldn't care which ssh authentication
<br>
mechanism is used, as long as it works passwordless.
<br>
<p>As for ssh configuration, ours is pretty standard:
<br>
<p>1) We don't have 'IdentitiesOnly yes' (default is 'no'),
<br>
but use standard identity file names id_rsa, etc.
<br>
I think you are just telling ssh to use the specific identity
<br>
file you named.
<br>
I don't know if this may cause the problem, but who knows?
<br>
<p>2) We don't have 'BatchMode yes' set.
<br>
<p>3) We have the GSS authentication set
<br>
<p>GSSAPIAuthentication yes
<br>
<p>4) The locale environment variables are also passed
<br>
(may not be crucial):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SendEnv LANG LC_CTYPE LC_NUMERIC LC_TIME LC_COLLATE LC_MONETARY 
<br>
LC_MESSAGES
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SendEnv LC_PAPER LC_NAME LC_ADDRESS LC_TELEPHONE LC_MEASUREMENT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SendEnv LC_IDENTIFICATION LC_ALL
<br>
<p>5) And X forwarding (you're not doing any X stuff, I suppose):
<br>
<p>ForwardX11Trusted yes
<br>
<p>6) However, you may want to check what is in your
<br>
/etc/ssh/ssh_config and /etc/ssh/sshd_config,
<br>
because some options may be already set there.
<br>
<p>7) Take a look at 'man ssh[d]' and  'man ssh[d]_config' too.
<br>
<p>***
<br>
<p>Finally, if you are willing to, it may be worth to run the same
<br>
experiment (with debug3) on vixen @ dashen, just to compare what
<br>
comes out from the verbose ssh messages to what you see in EC2.
<br>
Perhaps it may help nail down the reason for failure.
<br>
<p>Gus Correa
<br>
<p><p><p><span class="quotelev1">&gt;   [tsakai_at_vixen ec2]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_vixen ec2]$ ssh -i $MYKEY
</span><br>
<span class="quotelev1">&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev1">&gt;   Last login: Wed Feb 16 06:50:08 2011 from 63.193.205.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          __|  __|_  )  Amazon Linux AMI
</span><br>
<span class="quotelev1">&gt;          _|  (     /     Beta
</span><br>
<span class="quotelev1">&gt;         ___|\___|___|
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   See /usr/share/doc/amzn-ami/image-release-notes for latest release notes.
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ # show firewall is off
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ service iptables status
</span><br>
<span class="quotelev1">&gt;   -bash: service: command not found
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ sudo service iptables status
</span><br>
<span class="quotelev1">&gt;   iptables: Firewall is not running.
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ # show I can go to inst B with no
</span><br>
<span class="quotelev1">&gt; password authentication
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ ssh
</span><br>
<span class="quotelev1">&gt; domU-12-31-39-16-4E-4C.compute-1.internal
</span><br>
<span class="quotelev1">&gt;   Last login: Wed Feb 16 06:53:14 2011 from
</span><br>
<span class="quotelev1">&gt; domu-12-31-39-16-75-1e.compute-1.internal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          __|  __|_  )  Amazon Linux AMI
</span><br>
<span class="quotelev1">&gt;          _|  (     /     Beta
</span><br>
<span class="quotelev1">&gt;         ___|\___|___|
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   See /usr/share/doc/amzn-ami/image-release-notes for latest release notes.
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-4E-4C ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-4E-4C ~]$ # also back to inst A
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-4E-4C ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-4E-4C ~]$ ssh
</span><br>
<span class="quotelev1">&gt; domU-12-31-39-16-75-1E.compute-1.internal
</span><br>
<span class="quotelev1">&gt;   Last login: Wed Feb 16 06:58:33 2011 from 63.193.205.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          __|  __|_  )  Amazon Linux AMI
</span><br>
<span class="quotelev1">&gt;          _|  (     /     Beta
</span><br>
<span class="quotelev1">&gt;         ___|\___|___|
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   See /usr/share/doc/amzn-ami/image-release-notes for latest release notes.
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ # OK
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ # back to inst B
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ exit
</span><br>
<span class="quotelev1">&gt;   logout
</span><br>
<span class="quotelev1">&gt;   Connection to domU-12-31-39-16-75-1E.compute-1.internal closed.
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-4E-4C ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-4E-4C ~]$ env | grep LD_LIB
</span><br>
<span class="quotelev1">&gt;   LD_LIBRARY_PATH=:/usr/local/lib
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-4E-4C ~]$ # show no firewall on inst B
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-4E-4C ~]$ sudo service iptables status
</span><br>
<span class="quotelev1">&gt;   iptables: Firewall is not running.
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-4E-4C ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-4E-4C ~]$ # go back to inst A
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-4E-4C ~]$ exit
</span><br>
<span class="quotelev1">&gt;   logout
</span><br>
<span class="quotelev1">&gt;   Connection to domU-12-31-39-16-4E-4C.compute-1.internal closed.
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ env | grep LD_LIB
</span><br>
<span class="quotelev1">&gt;   LD_LIBRARY_PATH=:/usr/local/lib
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ cat app.ac
</span><br>
<span class="quotelev1">&gt;   -H domU-12-31-39-16-75-1E.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;   -H domU-12-31-39-16-75-1E.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;   -H domU-12-31-39-16-4E-4C.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;   -H domU-12-31-39-16-4E-4C.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ # top 2 are inst A (this machine);
</span><br>
<span class="quotelev1">&gt; bottom 2 are remote inst (inst B)
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ mpirun -app app.ac
</span><br>
<span class="quotelev1">&gt;   ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;   that caused that situation.
</span><br>
<span class="quotelev1">&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt;   below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt;   the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         domU-12-31-39-16-4E-4C.compute-1.internal - daemon did not report
</span><br>
<span class="quotelev1">&gt; back when launched
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ # *** daemon did not report back when
</span><br>
<span class="quotelev1">&gt; launched ***
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ cat app.ac2
</span><br>
<span class="quotelev1">&gt;   -H domU-12-31-39-16-75-1E.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;   -H domU-12-31-39-16-75-1E.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ # they refer to this instance (inst A)
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ mpirun -app app.ac2
</span><br>
<span class="quotelev1">&gt;   domU-12-31-39-16-75-1E
</span><br>
<span class="quotelev1">&gt;   domU-12-31-39-16-75-1E
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ # that's no problem
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ cd .ssh
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$ cat config
</span><br>
<span class="quotelev1">&gt;   Host *
</span><br>
<span class="quotelev1">&gt;         IdentityFile /home/tsakai/.ssh/tsakai
</span><br>
<span class="quotelev1">&gt;         IdentitiesOnly yes
</span><br>
<span class="quotelev1">&gt;         BatchMode yes
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$ mv config config.svd
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$ cat config.svd &gt; config
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$ ll config
</span><br>
<span class="quotelev1">&gt;   -rw-rw-r-- 1 tsakai tsakai 81 Feb 16 07:06 config
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$ chmod 600 config
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$ cat config
</span><br>
<span class="quotelev1">&gt;   Host *
</span><br>
<span class="quotelev1">&gt;         IdentityFile /home/tsakai/.ssh/tsakai
</span><br>
<span class="quotelev1">&gt;         IdentitiesOnly yes
</span><br>
<span class="quotelev1">&gt;         BatchMode yes
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$ cat - &gt;&gt; config
</span><br>
<span class="quotelev1">&gt;         LogLevel DEBUG3
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$ cat config
</span><br>
<span class="quotelev1">&gt;   Host *
</span><br>
<span class="quotelev1">&gt;         IdentityFile /home/tsakai/.ssh/tsakai
</span><br>
<span class="quotelev1">&gt;         IdentitiesOnly yes
</span><br>
<span class="quotelev1">&gt;         BatchMode yes
</span><br>
<span class="quotelev1">&gt;         LogLevel DEBUG3
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$ ll config
</span><br>
<span class="quotelev1">&gt;   -rw------- 1 tsakai tsakai 98 Feb 16 07:07 config
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E .ssh]$ cd ..
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ mpirun -app app.ac
</span><br>
<span class="quotelev1">&gt;   debug2: ssh_connect: needpriv 0
</span><br>
<span class="quotelev1">&gt;   debug1: Connecting to domU-12-31-39-16-4E-4C.compute-1.internal
</span><br>
<span class="quotelev1">&gt; [10.96.77.182] port 22.
</span><br>
<span class="quotelev1">&gt;   debug1: Connection established.
</span><br>
<span class="quotelev1">&gt;   debug3: Not a RSA1 key file /home/tsakai/.ssh/tsakai.
</span><br>
<span class="quotelev1">&gt;   debug2: key_type_from_name: unknown key type '-----BEGIN'
</span><br>
<span class="quotelev1">&gt;   debug3: key_read: missing keytype
</span><br>
<span class="quotelev1">&gt;   debug3: key_read: missing whitespace
</span><br>
<span class="quotelev1">&gt;   debug3: key_read: missing whitespace
</span><br>
<span class="quotelev1">&gt;   debug3: key_read: missing whitespace
</span><br>
<span class="quotelev1">&gt;   debug3: key_read: missing whitespace
</span><br>
<span class="quotelev1">&gt;   debug3: key_read: missing whitespace
</span><br>
<span class="quotelev1">&gt;   debug3: key_read: missing whitespace
</span><br>
<span class="quotelev1">&gt;   debug3: key_read: missing whitespace
</span><br>
<span class="quotelev1">&gt;   debug3: key_read: missing whitespace
</span><br>
<span class="quotelev1">&gt;   debug3: key_read: missing whitespace
</span><br>
<span class="quotelev1">&gt;   debug3: key_read: missing whitespace
</span><br>
<span class="quotelev1">&gt;   debug3: key_read: missing whitespace
</span><br>
<span class="quotelev1">&gt;   debug3: key_read: missing whitespace
</span><br>
<span class="quotelev1">&gt;   debug3: key_read: missing whitespace
</span><br>
<span class="quotelev1">&gt;   debug2: key_type_from_name: unknown key type '-----END'
</span><br>
<span class="quotelev1">&gt;   debug3: key_read: missing keytype
</span><br>
<span class="quotelev1">&gt;   debug1: identity file /home/tsakai/.ssh/tsakai type -1
</span><br>
<span class="quotelev1">&gt;   debug1: Remote protocol version 2.0, remote software version OpenSSH_5.3
</span><br>
<span class="quotelev1">&gt;   debug1: match: OpenSSH_5.3 pat OpenSSH*
</span><br>
<span class="quotelev1">&gt;   debug1: Enabling compatibility mode for protocol 2.0
</span><br>
<span class="quotelev1">&gt;   debug1: Local version string SSH-2.0-OpenSSH_5.3
</span><br>
<span class="quotelev1">&gt;   debug2: fd 3 setting O_NONBLOCK
</span><br>
<span class="quotelev1">&gt;   debug1: SSH2_MSG_KEXINIT sent
</span><br>
<span class="quotelev1">&gt;   debug3: Wrote 792 bytes for a total of 813
</span><br>
<span class="quotelev1">&gt;   debug1: SSH2_MSG_KEXINIT received
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit:
</span><br>
<span class="quotelev1">&gt; diffie-hellman-group-exchange-sha256,diffie-hellman-group-exchange-sha1,diff
</span><br>
<span class="quotelev1">&gt; ie-hellman-group14-sha1,diffie-hellman-group1-sha1
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit: ssh-rsa,ssh-dss
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit:
</span><br>
<span class="quotelev1">&gt; aes128-ctr,aes192-ctr,aes256-ctr,arcfour256,arcfour128,aes128-cbc,3des-cbc,b
</span><br>
<span class="quotelev1">&gt; lowfish-cbc,cast128-cbc,aes192-cbc,aes256-cbc,arcfour,rijndael-cbc_at_lysator.l
</span><br>
<span class="quotelev1">&gt; iu.se
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit:
</span><br>
<span class="quotelev1">&gt; aes128-ctr,aes192-ctr,aes256-ctr,arcfour256,arcfour128,aes128-cbc,3des-cbc,b
</span><br>
<span class="quotelev1">&gt; lowfish-cbc,cast128-cbc,aes192-cbc,aes256-cbc,arcfour,rijndael-cbc_at_lysator.l
</span><br>
<span class="quotelev1">&gt; iu.se
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit:
</span><br>
<span class="quotelev1">&gt; hmac-md5,hmac-sha1,umac-64_at_[hidden],hmac-ripemd160,hmac-ripemd160_at_openssh
</span><br>
<span class="quotelev1">&gt; .com,hmac-sha1-96,hmac-md5-96
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit:
</span><br>
<span class="quotelev1">&gt; hmac-md5,hmac-sha1,umac-64_at_[hidden],hmac-ripemd160,hmac-ripemd160_at_openssh
</span><br>
<span class="quotelev1">&gt; .com,hmac-sha1-96,hmac-md5-96
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit: none,zlib_at_[hidden],zlib
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit: none,zlib_at_[hidden],zlib
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit:
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit:
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit: first_kex_follows 0
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit: reserved 0
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit:
</span><br>
<span class="quotelev1">&gt; diffie-hellman-group-exchange-sha256,diffie-hellman-group-exchange-sha1,diff
</span><br>
<span class="quotelev1">&gt; ie-hellman-group14-sha1,diffie-hellman-group1-sha1
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit: ssh-rsa,ssh-dss
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit:
</span><br>
<span class="quotelev1">&gt; aes128-ctr,aes192-ctr,aes256-ctr,arcfour256,arcfour128,aes128-cbc,3des-cbc,b
</span><br>
<span class="quotelev1">&gt; lowfish-cbc,cast128-cbc,aes192-cbc,aes256-cbc,arcfour,rijndael-cbc_at_lysator.l
</span><br>
<span class="quotelev1">&gt; iu.se
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit:
</span><br>
<span class="quotelev1">&gt; aes128-ctr,aes192-ctr,aes256-ctr,arcfour256,arcfour128,aes128-cbc,3des-cbc,b
</span><br>
<span class="quotelev1">&gt; lowfish-cbc,cast128-cbc,aes192-cbc,aes256-cbc,arcfour,rijndael-cbc_at_lysator.l
</span><br>
<span class="quotelev1">&gt; iu.se
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit:
</span><br>
<span class="quotelev1">&gt; hmac-md5,hmac-sha1,umac-64_at_[hidden],hmac-ripemd160,hmac-ripemd160_at_openssh
</span><br>
<span class="quotelev1">&gt; .com,hmac-sha1-96,hmac-md5-96
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit:
</span><br>
<span class="quotelev1">&gt; hmac-md5,hmac-sha1,umac-64_at_[hidden],hmac-ripemd160,hmac-ripemd160_at_openssh
</span><br>
<span class="quotelev1">&gt; .com,hmac-sha1-96,hmac-md5-96
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit: none,zlib_at_[hidden]
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit: none,zlib_at_[hidden]
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit:
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit:
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit: first_kex_follows 0
</span><br>
<span class="quotelev1">&gt;   debug2: kex_parse_kexinit: reserved 0
</span><br>
<span class="quotelev1">&gt;   debug2: mac_setup: found hmac-md5
</span><br>
<span class="quotelev1">&gt;   debug1: kex: server-&gt;client aes128-ctr hmac-md5 none
</span><br>
<span class="quotelev1">&gt;   debug2: mac_setup: found hmac-md5
</span><br>
<span class="quotelev1">&gt;   debug1: kex: client-&gt;server aes128-ctr hmac-md5 none
</span><br>
<span class="quotelev1">&gt;   debug1: SSH2_MSG_KEX_DH_GEX_REQUEST(1024&lt;1024&lt;8192) sent
</span><br>
<span class="quotelev1">&gt;   debug1: expecting SSH2_MSG_KEX_DH_GEX_GROUP
</span><br>
<span class="quotelev1">&gt;   debug3: Wrote 24 bytes for a total of 837
</span><br>
<span class="quotelev1">&gt;   debug2: dh_gen_key: priv key bits set: 125/256
</span><br>
<span class="quotelev1">&gt;   debug2: bits set: 489/1024
</span><br>
<span class="quotelev1">&gt;   debug1: SSH2_MSG_KEX_DH_GEX_INIT sent
</span><br>
<span class="quotelev1">&gt;   debug1: expecting SSH2_MSG_KEX_DH_GEX_REPLY
</span><br>
<span class="quotelev1">&gt;   debug3: Wrote 144 bytes for a total of 981
</span><br>
<span class="quotelev1">&gt;   debug3: check_host_in_hostfile: filename /home/tsakai/.ssh/known_hosts
</span><br>
<span class="quotelev1">&gt;   debug3: check_host_in_hostfile: match line 1
</span><br>
<span class="quotelev1">&gt;   debug3: check_host_in_hostfile: filename /home/tsakai/.ssh/known_hosts
</span><br>
<span class="quotelev1">&gt;   debug3: check_host_in_hostfile: match line 1
</span><br>
<span class="quotelev1">&gt;   debug1: Host 'domu-12-31-39-16-4e-4c.compute-1.internal' is known and
</span><br>
<span class="quotelev1">&gt; matches the RSA host key.
</span><br>
<span class="quotelev1">&gt;   debug1: Found key in /home/tsakai/.ssh/known_hosts:1
</span><br>
<span class="quotelev1">&gt;   debug2: bits set: 491/1024
</span><br>
<span class="quotelev1">&gt;   debug1: ssh_rsa_verify: signature correct
</span><br>
<span class="quotelev1">&gt;   debug2: kex_derive_keys
</span><br>
<span class="quotelev1">&gt;   debug2: set_newkeys: mode 1
</span><br>
<span class="quotelev1">&gt;   debug1: SSH2_MSG_NEWKEYS sent
</span><br>
<span class="quotelev1">&gt;   debug1: expecting SSH2_MSG_NEWKEYS
</span><br>
<span class="quotelev1">&gt;   debug3: Wrote 16 bytes for a total of 997
</span><br>
<span class="quotelev1">&gt;   debug2: set_newkeys: mode 0
</span><br>
<span class="quotelev1">&gt;   debug1: SSH2_MSG_NEWKEYS received
</span><br>
<span class="quotelev1">&gt;   debug1: SSH2_MSG_SERVICE_REQUEST sent
</span><br>
<span class="quotelev1">&gt;   debug3: Wrote 48 bytes for a total of 1045
</span><br>
<span class="quotelev1">&gt;   debug2: service_accept: ssh-userauth
</span><br>
<span class="quotelev1">&gt;   debug1: SSH2_MSG_SERVICE_ACCEPT received
</span><br>
<span class="quotelev1">&gt;   debug2: key: /home/tsakai/.ssh/tsakai ((nil))
</span><br>
<span class="quotelev1">&gt;   debug3: Wrote 64 bytes for a total of 1109
</span><br>
<span class="quotelev1">&gt;   debug1: Authentications that can continue: publickey
</span><br>
<span class="quotelev1">&gt;   debug3: start over, passed a different list publickey
</span><br>
<span class="quotelev1">&gt;   debug3: preferred gssapi-with-mic,publickey
</span><br>
<span class="quotelev1">&gt;   debug3: authmethod_lookup publickey
</span><br>
<span class="quotelev1">&gt;   debug3: remaining preferred: ,publickey
</span><br>
<span class="quotelev1">&gt;   debug3: authmethod_is_enabled publickey
</span><br>
<span class="quotelev1">&gt;   debug1: Next authentication method: publickey
</span><br>
<span class="quotelev1">&gt;   debug1: Trying private key: /home/tsakai/.ssh/tsakai
</span><br>
<span class="quotelev1">&gt;   debug1: read PEM private key done: type RSA
</span><br>
<span class="quotelev1">&gt;   debug3: sign_and_send_pubkey
</span><br>
<span class="quotelev1">&gt;   debug2: we sent a publickey packet, wait for reply
</span><br>
<span class="quotelev1">&gt;   debug3: Wrote 384 bytes for a total of 1493
</span><br>
<span class="quotelev1">&gt;   debug1: Authentication succeeded (publickey).
</span><br>
<span class="quotelev1">&gt;   debug2: fd 4 setting O_NONBLOCK
</span><br>
<span class="quotelev1">&gt;   debug1: channel 0: new [client-session]
</span><br>
<span class="quotelev1">&gt;   debug3: ssh_session2_open: channel_new: 0
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: send open
</span><br>
<span class="quotelev1">&gt;   debug1: Requesting no-more-sessions_at_[hidden]
</span><br>
<span class="quotelev1">&gt;   debug1: Entering interactive session.
</span><br>
<span class="quotelev1">&gt;   debug3: Wrote 128 bytes for a total of 1621
</span><br>
<span class="quotelev1">&gt;   debug2: callback start
</span><br>
<span class="quotelev1">&gt;   debug2: client_session2_setup: id 0
</span><br>
<span class="quotelev1">&gt;   debug1: Sending environment.
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env HOSTNAME
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env TERM
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env SHELL
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env HISTSIZE
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env EC2_AMITOOL_HOME
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env SSH_CLIENT
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env SSH_TTY
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env USER
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env LS_COLORS
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env EC2_HOME
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env MAIL
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env PATH
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env INPUTRC
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env PWD
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env JAVA_HOME
</span><br>
<span class="quotelev1">&gt;   debug1: Sending env LANG = en_US.UTF-8
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: request env confirm 0
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env AWS_CLOUDWATCH_HOME
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env AWS_IAM_HOME
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env SHLVL
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env HOME
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env AWS_PATH
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env AWS_AUTO_SCALING_HOME
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env LOGNAME
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env AWS_ELB_HOME
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env SSH_CONNECTION
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env LESSOPEN
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env AWS_RDS_HOME
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env G_BROKEN_FILENAMES
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env _
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env OLDPWD
</span><br>
<span class="quotelev1">&gt;   debug3: Ignored env OMPI_MCA_plm
</span><br>
<span class="quotelev1">&gt;   debug1: Sending command:  orted --daemonize -mca ess env -mca
</span><br>
<span class="quotelev1">&gt; orte_ess_jobid 125566976 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2
</span><br>
<span class="quotelev1">&gt; --hnp-uri &quot;125566976.0;tcp://10.96.118.236:56064&quot;
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: request exec confirm 1
</span><br>
<span class="quotelev1">&gt;   debug2: fd 3 setting TCP_NODELAY
</span><br>
<span class="quotelev1">&gt;   debug2: callback done
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: open confirm rwindow 0 rmax 32768
</span><br>
<span class="quotelev1">&gt;   debug3: Wrote 272 bytes for a total of 1893
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: rcvd adjust 2097152
</span><br>
<span class="quotelev1">&gt;   debug2: channel_input_status_confirm: type 99 id 0
</span><br>
<span class="quotelev1">&gt;   debug2: exec request accepted on channel 0
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: read&lt;=0 rfd 4 len 0
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: read failed
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: close_read
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: input open -&gt; drain
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: ibuf empty
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: send eof
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: input drain -&gt; closed
</span><br>
<span class="quotelev1">&gt;   debug3: Wrote 32 bytes for a total of 1925
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: rcvd eof
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: output open -&gt; drain
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: obuf empty
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: close_write
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: output drain -&gt; closed
</span><br>
<span class="quotelev1">&gt;   debug1: client_input_channel_req: channel 0 rtype exit-status reply 0
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: rcvd close
</span><br>
<span class="quotelev1">&gt;   debug3: channel 0: will not send data after close
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: almost dead
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: gc: notify user
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: gc: user detached
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: send close
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: is dead
</span><br>
<span class="quotelev1">&gt;   debug2: channel 0: garbage collecting
</span><br>
<span class="quotelev1">&gt;   debug1: channel 0: free: client-session, nchannels 1
</span><br>
<span class="quotelev1">&gt;   debug3: channel 0: status: The following connections are open:
</span><br>
<span class="quotelev1">&gt;     #0 client-session (t4 r0 i3/0 o3/0 fd -1/-1 cfd -1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   debug3: channel 0: close_fds r -1 w -1 e 6 c -1
</span><br>
<span class="quotelev1">&gt;   debug3: Wrote 32 bytes for a total of 1957
</span><br>
<span class="quotelev1">&gt;   debug3: Wrote 64 bytes for a total of 2021
</span><br>
<span class="quotelev1">&gt;   debug1: fd 0 clearing O_NONBLOCK
</span><br>
<span class="quotelev1">&gt;   Transferred: sent 1840, received 1896 bytes, in 0.1 seconds
</span><br>
<span class="quotelev1">&gt;   Bytes per second: sent 18384.8, received 18944.3
</span><br>
<span class="quotelev1">&gt;   debug1: Exit status 0
</span><br>
<span class="quotelev1">&gt;   # it is hanging; I am about to issue control-C
</span><br>
<span class="quotelev1">&gt;   ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;   that caused that situation.
</span><br>
<span class="quotelev1">&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt;   below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt;   the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         domU-12-31-39-16-4E-4C.compute-1.internal - daemon did not report
</span><br>
<span class="quotelev1">&gt; back when launched
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ # it says the same thing, i.e.,
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ # daemon did not report back when
</span><br>
<span class="quotelev1">&gt; launched
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ # what does that mean?
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ # ssh doesn't say anything alarming...
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ # I give up
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_domU-12-31-39-16-75-1E ~]$ exit
</span><br>
<span class="quotelev1">&gt;   logout
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_vixen ec2]$
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_vixen ec2]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you see anything strange?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One final question: On ssh man page, it mentions a few environmental
</span><br>
<span class="quotelev1">&gt; varialbles.  SSH_ASKPASS, SSH_AUTH_SOCK, SSH_CONNECTION, etc.  Do
</span><br>
<span class="quotelev1">&gt; any of these matter as far as openMPI is concerned?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you, Gus.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tena
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/15/11 5:09 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to reproduce what I was able to show last Friday on Amazon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EC2 instances, but I am having a problem.  What I was able to show last
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Friday as root was with this command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mpirun &#173;app app.ac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with app.ac being:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -H dns-entry-A &#173;np 1 (linux command)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -H dns-entry-A &#173;np 1 (linux command)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -H dns-entry-B &#173;np 1 (linux command)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -H dns-entry-B &#173;np 1 (linux command)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here&#185;s the config file in root&#185;s .ssh directory:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Host *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         IdentityFile /root/.ssh/.derobee/.kagi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         IdentitiesOnly yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         BatchMode yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yesterday and today I can&#185;t get this to work.  I made the last part of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; app.ac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file simpler (it now says /bin/hostname).  Below is the session:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# # I am on instance A, host name for inst A is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# nslookup domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Server:               172.16.0.23
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Address:      172.16.0.23#53
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Non-authoritative answer:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Name: domU-12-31-39-09-CD-C2.compute-1.internal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Address: 10.210.210.48
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# cd .ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# cat config
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Host *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           IdentityFile /root/.ssh/.derobee/.kagi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           IdentitiesOnly yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           BatchMode yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# ll config
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -rw-r--r-- 1 root root 103 Feb 15 17:18 config
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# chmod 600 config
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# # show I can go to inst B without password/passphrase
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# ssh domU-12-31-39-09-E6-71.compute-1.internal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Last login: Tue Feb 15 17:18:46 2011 from 10.210.210.48
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   domU-12-31-39-09-E6-71
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# nslookup `hostname`
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Server:               172.16.0.23
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Address:      172.16.0.23#53
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Non-authoritative answer:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Name: domU-12-31-39-09-E6-71.compute-1.internal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Address: 10.210.233.123
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# # and back to inst A is also no problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# ssh domU-12-31-39-09-CD-C2.compute-1.internal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Last login: Tue Feb 15 17:36:19 2011 from 63.193.205.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# # log out twice to go back to inst A
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   logout
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Connection to domU-12-31-39-09-CD-C2.compute-1.internal closed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   logout
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Connection to domU-12-31-39-09-E6-71.compute-1.internal closed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# cd ..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# pwd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /root
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# ll
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   total 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -rw-r--r-- 1 root root 260 Feb 15 17:24 app.ac
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -rw-r--r-- 1 root root 130 Feb 15 17:34 app.ac2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# cat app.ac
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -H domU-12-31-39-09-CD-C2.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -H domU-12-31-39-09-CD-C2.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -H domU-12-31-39-09-E6-71.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -H domU-12-31-39-09-E6-71.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# # when there is a remote machine (bottome 2 lines) it hangs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# mpirun -app app.ac
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mpirun: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         domU-12-31-39-09-E6-71.compute-1.internal - daemon did not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; report back when launched
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# cat app.ac2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -H domU-12-31-39-09-CD-C2.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -H domU-12-31-39-09-CD-C2.compute-1.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# # when there is no remote machine, then mpirun works:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# mpirun -app app.ac2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   domU-12-31-39-09-CD-C2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# # this gotta be ssh problem....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# # show no firewall is used
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# iptables --list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Chain INPUT (policy ACCEPT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    target     prot opt source               destination
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Chain FORWARD (policy ACCEPT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   target     prot opt source               destination
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Chain OUTPUT (policy ACCEPT)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   target     prot opt source               destination
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -bash-3.2# exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   logout
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [tsakai_at_vixen ec2]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would someone please point out what I am doing wrong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tena
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Tena
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nothing wrong that I can see.
</span><br>
<span class="quotelev2">&gt;&gt; Just another couple of suggestions,
</span><br>
<span class="quotelev2">&gt;&gt; based on somewhat vague possibilities.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A slight difference is that on vixen and dashen you ran the
</span><br>
<span class="quotelev2">&gt;&gt; MPI hostname tests as a regular user, not as root, right?
</span><br>
<span class="quotelev2">&gt;&gt; Not sure if this will make much of a difference,
</span><br>
<span class="quotelev2">&gt;&gt; but it may be worth trying to run it as a regular user in EC2 also.
</span><br>
<span class="quotelev2">&gt;&gt; I general most people avoid running user applications (MPI programs
</span><br>
<span class="quotelev2">&gt;&gt; included) as root.
</span><br>
<span class="quotelev2">&gt;&gt; Mostly for safety, but I wonder if there are any
</span><br>
<span class="quotelev2">&gt;&gt; implications in the 'rootly powers'
</span><br>
<span class="quotelev2">&gt;&gt; regarding the under-the-hood processes that OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; launches along with the actual user programs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may make no difference either,
</span><br>
<span class="quotelev2">&gt;&gt; but you could do a 'service iptables status',
</span><br>
<span class="quotelev2">&gt;&gt; to see if the service is running, even though there are
</span><br>
<span class="quotelev2">&gt;&gt; no explicit iptable rules (as per your email).
</span><br>
<span class="quotelev2">&gt;&gt; If the service is not running you get
</span><br>
<span class="quotelev2">&gt;&gt; 'Firewall is stopped.' (in CentOS).
</span><br>
<span class="quotelev2">&gt;&gt; I *think* 'iptables --list' loads the iptables module into the
</span><br>
<span class="quotelev2">&gt;&gt; kernel, as a side effect, whereas the service command does not.
</span><br>
<span class="quotelev2">&gt;&gt; So, it may be cleaner (safer?) to use the service version
</span><br>
<span class="quotelev2">&gt;&gt; instead of 'iptables --list'.
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if it will make any difference,
</span><br>
<span class="quotelev2">&gt;&gt; but just in case, if the service is running,
</span><br>
<span class="quotelev2">&gt;&gt; why not do 'service iptables stop',
</span><br>
<span class="quotelev2">&gt;&gt; and perhaps also 'chkconfig iptables off' to be completely
</span><br>
<span class="quotelev2">&gt;&gt; free of iptables?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
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
<li><strong>Next message:</strong> <a href="15630.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>Previous message:</strong> <a href="15628.php">Petit, George (Cont, ARL/CISD): "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>In reply to:</strong> <a href="15626.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15631.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15631.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Reply:</strong> <a href="15634.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
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

<?
$subject_val = "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 13 13:26:38 2012" -->
<!-- isoreceived="20121113182638" -->
<!-- sent="Tue, 13 Nov 2012 13:26:31 -0500" -->
<!-- isosent="20121113182631" -->
<!-- name="huaibao zhang" -->
<!-- email="huaibao.zhang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH" -->
<!-- id="F848764A-AF82-4E62-AD4A-9873CD8AC42B_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1B410C23-518D-4523-B942-757D0FA0FEFB_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH<br>
<strong>From:</strong> huaibao zhang (<em>huaibao.zhang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-13 13:26:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20714.php">Reuti: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="20712.php">Reuti: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="20712.php">Reuti: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20714.php">Reuti: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="20714.php">Reuti: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="20716.php">Zbigniew Koza: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti, 
<br>
<p>Thanks for your answer. I really appreciate it.
<br>
I am using an old version 1.4.3. for my code. If I only type $./configure,  it will compile, but I have no idea where it is installed. I typed $ find /lib -name &quot;libopen-pal.so.0&quot;, but it shows nothing. Do you thinks it is caused since I am not a root user or the old version.
<br>
<p>Thanks,
<br>
Paul
<br>
<p><pre>
--
Huaibao (Paul) Zhang
Gas Surface Interactions Lab
Department of Mechanical Engineering
University of Kentucky,
Lexington, KY, 40506-0503
Office: 216 Ralph G. Anderson Building
Web:gsil.engineering.uky.edu
On Nov 13, 2012, at 12:24 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
&gt; Am 13.11.2012 um 15:44 schrieb huaibao zhang:
&gt; 
&gt;&gt; I installed OpenMPI on my Ubuntu 64 bit desktop. At first, I did not specify &quot;prefix&quot;, so even I've installed it. I could not find where it is. Since the &quot;PATH&quot; and &quot;LD&quot; have to be given, the mpicc can find the &quot;lib open-pal.so.0&quot; file. 
&gt; 
&gt; You mean &quot;...can't find...&quot;? If you use the default location, it should have the correct settings already even without adding any path to PATH or LD_LIBRARY_PATH.
&gt; 
&gt; You can use:
&gt; 
&gt; $ find /lib -name &quot;libopen-pal.so.0&quot;
&gt; 
&gt; to spot the location. But I wonder about the version. The actual one seems to be libopen-pal.so.4 -&gt; libopen-pal.so.4.0.3 - which version are you using?
&gt; 
&gt; -- Reuti
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20713/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20714.php">Reuti: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="20712.php">Reuti: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="20712.php">Reuti: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20714.php">Reuti: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="20714.php">Reuti: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="20716.php">Zbigniew Koza: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
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

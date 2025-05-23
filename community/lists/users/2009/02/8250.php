<?
$subject_val = "[OMPI users] threading bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 13:56:44 2009" -->
<!-- isoreceived="20090227185644" -->
<!-- sent="Fri, 27 Feb 2009 13:56:39 -0500" -->
<!-- isosent="20090227185639" -->
<!-- name="Mahmoud Payami" -->
<!-- email="mahmoud.payami_at_[hidden]" -->
<!-- subject="[OMPI users] threading bug?" -->
<!-- id="118b978f0902271056l18fb3730h5b4052c1a5a2b8bc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] threading bug?<br>
<strong>From:</strong> Mahmoud Payami (<em>mahmoud.payami_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 13:56:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8251.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Previous message:</strong> <a href="8249.php">Douglas Guptill: "Re: [OMPI users] valgrind problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8294.php">Jeff Squyres: "Re: [OMPI users] threading bug?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8294.php">Jeff Squyres: "Re: [OMPI users] threading bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I am using intel lc_prof-11 (and its own mkl) and have built openmpi-1.3.1
<br>
with connfigure options: &quot;FC=ifort F77=ifort CC=icc CXX=icpc&quot;. Then I have
<br>
built my application.
<br>
The linux box is 2Xamd64 quad. In the middle of running of my application
<br>
(after some 15 iterations), I receive the message and stops.
<br>
I tried to configure openmpi using &quot;--disable-mpi-threads&quot; but it
<br>
automatically assumes &quot;posix&quot;.
<br>
This problem does not happen in openmpi-1.2.9.
<br>
Any comment is highly appreciated.
<br>
Best regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mahmoud payami
<br>
<p><p>[hpc1:25353] *** Process received signal ***
<br>
[hpc1:25353] Signal: Segmentation fault (11)
<br>
[hpc1:25353] Signal code: Address not mapped (1)
<br>
[hpc1:25353] Failing at address: 0x51
<br>
[hpc1:25353] [ 0] /lib64/libpthread.so.0 [0x303be0dd40]
<br>
[hpc1:25353] [ 1] /opt/openmpi131_cc/lib/openmpi/mca_pml_ob1.so
<br>
[0x2aaaae350d96]
<br>
[hpc1:25353] [ 2] /opt/openmpi131_cc/lib/openmpi/mca_pml_ob1.so
<br>
[0x2aaaae3514a8]
<br>
[hpc1:25353] [ 3] /opt/openmpi131_cc/lib/openmpi/mca_btl_sm.so
<br>
[0x2aaaaeb7c72a]
<br>
[hpc1:25353] [ 4]
<br>
/opt/openmpi131_cc/lib/libopen-pal.so.0(opal_progress+0x89) [0x2aaaab42b7d9]
<br>
[hpc1:25353] [ 5] /opt/openmpi131_cc/lib/openmpi/mca_pml_ob1.so
<br>
[0x2aaaae34d27c]
<br>
[hpc1:25353] [ 6] /opt/openmpi131_cc/lib/libmpi.so.0(PMPI_Recv+0x210)
<br>
[0x2aaaaaf46010]
<br>
[hpc1:25353] [ 7] /opt/openmpi131_cc/lib/libmpi_f77.so.0(mpi_recv+0xa4)
<br>
[0x2aaaaacd6af4]
<br>
[hpc1:25353] [ 8]
<br>
/opt/QE131_cc/bin/pw.x(parallel_toolkit_mp_zsqmred_+0x13da) [0x513d8a]
<br>
[hpc1:25353] [ 9] /opt/QE131_cc/bin/pw.x(pcegterg_+0x6c3f) [0x6667ff]
<br>
[hpc1:25353] [10] /opt/QE131_cc/bin/pw.x(diag_bands_+0xb9e) [0x65654e]
<br>
[hpc1:25353] [11] /opt/QE131_cc/bin/pw.x(c_bands_+0x277) [0x6575a7]
<br>
[hpc1:25353] [12] /opt/QE131_cc/bin/pw.x(electrons_+0x53f) [0x58a54f]
<br>
[hpc1:25353] [13] /opt/QE131_cc/bin/pw.x(MAIN__+0x1fb) [0x458acb]
<br>
[hpc1:25353] [14] /opt/QE131_cc/bin/pw.x(main+0x3c) [0x4588bc]
<br>
[hpc1:25353] [15] /lib64/libc.so.6(__libc_start_main+0xf4) [0x303b21d8a4]
<br>
[hpc1:25353] [16] /opt/QE131_cc/bin/pw.x(realloc+0x1b9) [0x4587e9]
<br>
[hpc1:25353] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 6 with PID 25353 on node hpc1 exited on
<br>
signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8250/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8251.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Previous message:</strong> <a href="8249.php">Douglas Guptill: "Re: [OMPI users] valgrind problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8294.php">Jeff Squyres: "Re: [OMPI users] threading bug?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8294.php">Jeff Squyres: "Re: [OMPI users] threading bug?"</a>
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

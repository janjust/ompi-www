<?
$subject_val = "Re: [OMPI users] GPUDirect with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 15:14:48 2015" -->
<!-- isoreceived="20150303201448" -->
<!-- sent="Tue, 3 Mar 2015 20:14:45 +0000" -->
<!-- isosent="20150303201445" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GPUDirect with OpenMPI" -->
<!-- id="4e41014ae9334b86979b1981f980dd03_at_HQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0b301a3b83c24181a5aa8090fd51c556_at_HQMAIL102.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] GPUDirect with OpenMPI<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-03 15:14:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26427.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>Previous message:</strong> <a href="26425.php">Lev Givon: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26316.php">Rolf vandeVaart: "Re: [OMPI users] GPUDirect with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26443.php">Aulwes, Rob: "Re: [OMPI users] GPUDirect with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="26443.php">Aulwes, Rob: "Re: [OMPI users] GPUDirect with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rob:
<br>
Sorry for the slow reply but it took me a while to figure this out.  It turns out that this issue had to do with how some of the memory within the smcuda BTL was being registered with CUDA.  This was fixed a few weeks ago and will be available in the 1.8.5 release.  Perhaps you could retry with a pre-release version of Open MPI 1.8.5 that is available here and confirm it fixes your issue.  Any of the ones listed on that page should be fine.
<br>
<p><a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>
<br>
<p>Thanks,
<br>
Rolf
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Rolf vandeVaart
<br>
Sent: Wednesday, February 11, 2015 3:50 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] GPUDirect with OpenMPI
<br>
<p>Let me try to reproduce this.  This should not have anything to do with GPU Direct RDMA.  However, to eliminate it, you could run with:
<br>
--mca btl_openib_want_cuda_gdr 0.
<br>
<p>Rolf
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Aulwes, Rob
<br>
Sent: Wednesday, February 11, 2015 2:17 PM
<br>
To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subject: [OMPI users] GPUDirect with OpenMPI
<br>
<p>Hi,
<br>
<p>I built OpenMPI 1.8.3 using PGI 14.7 and enabled CUDA support for CUDA 6.0.  I have a Fortran test code that tests GPUDirect and have included it here.  When I run it across 2 nodes using 4 MPI procs, sometimes it fails with incorrect results.  Specifically, sometimes rank 1 does not receive the correct value from one of the neighbors.
<br>
<p>The code was compiled using PGI 14.7:
<br>
mpif90 -o direct.x -acc acc_direct.f90
<br>
<p>and executed with:
<br>
mpirun -np 4 -npernode 2 -mca btl_openib_want_cudagdr 1 ./direct.x
<br>
<p>Does anyone know if I'm missing something when using GPUDirect?
<br>
<p>Thanks,Rob Aulwes
<br>
<p><p>program acc_direct
<br>
<p><p><p>&nbsp;include 'mpif.h'
<br>
<p><p><p><p><p>&nbsp;integer :: ierr, rank, nranks
<br>
<p>integer, dimension(:), allocatable :: i_ra
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;call mpi_init(ierr)
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;rank = rank + 1
<br>
<p>&nbsp;&nbsp;&nbsp;write(*,*) 'hello from rank ',rank
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, nranks, ierr)
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;allocate( i_ra(nranks) )
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;call nb_exchange
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
<p><p><p><p><p>&nbsp;contains
<br>
<p><p><p>&nbsp;subroutine nb_exchange
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;integer :: i, j
<br>
<p>&nbsp;&nbsp;&nbsp;integer, dimension(nranks - 1) :: sendreq, recvreq
<br>
<p>&nbsp;&nbsp;&nbsp;logical :: done
<br>
<p>&nbsp;&nbsp;&nbsp;integer :: stat(MPI_STATUS_SIZE)
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;i_ra = -1
<br>
<p>&nbsp;&nbsp;&nbsp;i_ra(rank) = rank
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;!$acc data copy(i_ra(1:nranks))
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;!$acc host_data use_device(i_ra)
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;cnt = 0
<br>
<p>&nbsp;&nbsp;&nbsp;do i = 1,nranks
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( i .ne. rank ) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cnt = cnt + 1
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_ISEND(i_ra(rank), 1, MPI_INTEGER, i - 1, rank, &amp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, sendreq(cnt), ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( ierr .ne. MPI_SUCCESS ) write(*,*) 'isend call failed.'
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_IRECV(i_ra(i), 1, MPI_INTEGER, i - 1, i, &amp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, recvreq(cnt), ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( ierr .ne. MPI_SUCCESS ) write(*,*) 'irecv call failed.'
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;enddo
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;!$acc end host_data
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;i = 0
<br>
<p>&nbsp;&nbsp;&nbsp;do while ( i .lt. 2*cnt )
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do j = 1, cnt
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( recvreq(j) .ne. MPI_REQUEST_NULL ) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_TEST(recvreq(j), done, stat, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( ierr .ne. MPI_SUCCESS ) &amp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'test for irecv call failed.'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( done ) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i = i + 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( sendreq(j) .ne. MPI_REQUEST_NULL ) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_TEST(sendreq(j), done, MPI_STATUS_IGNORE, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( ierr .ne. MPI_SUCCESS ) &amp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'test for irecv call failed.'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( done ) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i = i + 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
<p>&nbsp;&nbsp;&nbsp;enddo
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;write(*,*) rank,': nb_exchange: Updating host...'
<br>
<p>&nbsp;&nbsp;&nbsp;!$acc update host(i_ra(1:nranks))
<br>
<p><p><p><p><p>&nbsp;&nbsp;&nbsp;do j = 1, nranks
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( i_ra(j) .ne. j ) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'isend/irecv failed.'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'rank', rank,': i_ra(',j,') = ',i_ra(j)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;enddo
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;!$acc end data
<br>
<p><p><p>&nbsp;end subroutine
<br>
<p><p><p><p><p>end program
<br>
<p>________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26426/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26427.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>Previous message:</strong> <a href="26425.php">Lev Givon: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26316.php">Rolf vandeVaart: "Re: [OMPI users] GPUDirect with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26443.php">Aulwes, Rob: "Re: [OMPI users] GPUDirect with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="26443.php">Aulwes, Rob: "Re: [OMPI users] GPUDirect with OpenMPI"</a>
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

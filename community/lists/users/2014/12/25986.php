<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 14 21:52:57 2014" -->
<!-- isoreceived="20141215025257" -->
<!-- sent="Sun, 14 Dec 2014 21:52:55 -0500" -->
<!-- isosent="20141215025255" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close" -->
<!-- id="548E4D07.7010105_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="548DDFB3.5080905_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-14 21:52:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25987.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="25985.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>In reply to:</strong> <a href="25983.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25987.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="25987.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="25989.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>some new hints that might help:
<br>
<p>1- With valgrind     : If I run the same test case, same data, but moved 
<br>
to a shorter path+filename, then *valgrind* does *not* complains!!!!!!
<br>
2- Without valgrind: *Sometimes*, the test case with long path+filename 
<br>
passes without &quot;segfaulting&quot;!
<br>
3- It seems to happen at the fourth file I try to open using the 
<br>
following described procedure:
<br>
<p>Also, I was wondering about this: In this 2 processes test case (running 
<br>
in the same node), I :
<br>
<p>1- open the file collectively (which resides on the same ssd drive on my 
<br>
computer)
<br>
2-  MPI_File_read_at_all a long int and 3 chars (11 bytes)
<br>
3- stop (because I detect I am not reading my MPIIO file format)
<br>
4- close the file
<br>
<p>A guess (FWIW): Can process rank 0, for example close the file too 
<br>
quickly, which destroys the string reserved for the filename that is 
<br>
used by process rank 1 which could be using shared memory on the same node?
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p>On 12/14/2014 02:06 PM, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I finally (thanks for fixing oversubscribing) tested with 1.8.4rc3 for
</span><br>
<span class="quotelev1">&gt; my problem with collective MPI I/O.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A problem still there.  In this 2 processes example, process rank 1
</span><br>
<span class="quotelev1">&gt; dies with segfault while process rank 0 wait indefinitely...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running with valgrind, I found these errors which may gives hints:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *************************************************
</span><br>
<span class="quotelev1">&gt; Rank 1:
</span><br>
<span class="quotelev1">&gt; *************************************************
</span><br>
<span class="quotelev1">&gt; On process rank 1, without valgrind it ends with either a segmentation
</span><br>
<span class="quotelev1">&gt; violation or memory corruption or invalide free without valgrind).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But running with valgrind, it tells:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==16715== Invalid write of size 2
</span><br>
<span class="quotelev1">&gt; ==16715==    at 0x4C2E793: memcpy@@GLIBC_2.14 (vg_replace_strmem.c:915)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1F60AA91: opal_convertor_unpack (opal_convertor.c:321)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x25AA8DD3: mca_pml_ob1_recv_frag_callback_match
</span><br>
<span class="quotelev1">&gt; (pml_ob1_recvfrag.c:225)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x2544110C: mca_btl_vader_check_fboxes
</span><br>
<span class="quotelev1">&gt; (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x25443577: mca_btl_vader_component_progress
</span><br>
<span class="quotelev1">&gt; (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1F5F0F27: opal_progress (opal_progress.c:207)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1ACB40B3: opal_condition_wait (condition.h:93)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1ACB4201: ompi_request_wait_completion (request.h:381)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1ACB4305: ompi_request_default_wait (req_wait.c:39)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x26BA2FFB: ompi_coll_tuned_bcast_intra_generic
</span><br>
<span class="quotelev1">&gt; (coll_tuned_bcast.c:254)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x26BA36F7: ompi_coll_tuned_bcast_intra_binomial
</span><br>
<span class="quotelev1">&gt; (coll_tuned_bcast.c:385)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x26B94289: ompi_coll_tuned_bcast_intra_dec_fixed
</span><br>
<span class="quotelev1">&gt; (coll_tuned_decision_fixed.c:258)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1ACD55F2: PMPI_Bcast (pbcast.c:110)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x2FE1CC48: ADIOI_Shfp_fname (shfp_fname.c:67)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x2FDE3B0D: mca_io_romio_file_open
</span><br>
<span class="quotelev1">&gt; (io_romio_file_open.c:40)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1AD52344: module_init (io_base_file_select.c:455)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1AD51DFA: mca_io_base_file_select
</span><br>
<span class="quotelev1">&gt; (io_base_file_select.c:238)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1ACA582F: ompi_file_open (file.c:130)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x13F9B36F:
</span><br>
<span class="quotelev1">&gt; PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, std::string const&amp;, int,
</span><br>
<span class="quotelev1">&gt; ompi_file_t*&amp;, bool) (PAIO.cc:290)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0xCA44252:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::litGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;)
</span><br>
<span class="quotelev1">&gt; (Champ.cc:951)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
</span><br>
<span class="quotelev1">&gt; ==16715==  Address 0x32ef3e50 is 0 bytes after a block of size 256
</span><br>
<span class="quotelev1">&gt; alloc'd
</span><br>
<span class="quotelev1">&gt; ==16715==    at 0x4C2C5A4: malloc (vg_replace_malloc.c:296)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x2FE1C78E: ADIOI_Malloc_fn (malloc.c:50)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x2FE1C951: ADIOI_Shfp_fname (shfp_fname.c:25)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x2FDE3B0D: mca_io_romio_file_open
</span><br>
<span class="quotelev1">&gt; (io_romio_file_open.c:40)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1AD52344: module_init (io_base_file_select.c:455)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1AD51DFA: mca_io_base_file_select
</span><br>
<span class="quotelev1">&gt; (io_base_file_select.c:238)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1ACA582F: ompi_file_open (file.c:130)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x13F9B36F:
</span><br>
<span class="quotelev1">&gt; PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, std::string const&amp;, int,
</span><br>
<span class="quotelev1">&gt; ompi_file_t*&amp;, bool) (PAIO.cc:290)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0xCA44252:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::litGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;)
</span><br>
<span class="quotelev1">&gt; (Champ.cc:951)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ==16715== Invalid write of size 1
</span><br>
<span class="quotelev1">&gt; ==16715==    at 0x4C2E7BB: memcpy@@GLIBC_2.14 (vg_replace_strmem.c:915)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1F60AA91: opal_convertor_unpack (opal_convertor.c:321)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x25AA8DD3: mca_pml_ob1_recv_frag_callback_match
</span><br>
<span class="quotelev1">&gt; (pml_ob1_recvfrag.c:225)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x2544110C: mca_btl_vader_check_fboxes
</span><br>
<span class="quotelev1">&gt; (btl_vader_fbox.h:220)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x25443577: mca_btl_vader_component_progress
</span><br>
<span class="quotelev1">&gt; (btl_vader_component.c:695)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1F5F0F27: opal_progress (opal_progress.c:207)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1ACB40B3: opal_condition_wait (condition.h:93)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1ACB4201: ompi_request_wait_completion (request.h:381)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1ACB4305: ompi_request_default_wait (req_wait.c:39)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x26BA2FFB: ompi_coll_tuned_bcast_intra_generic
</span><br>
<span class="quotelev1">&gt; (coll_tuned_bcast.c:254)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x26BA36F7: ompi_coll_tuned_bcast_intra_binomial
</span><br>
<span class="quotelev1">&gt; (coll_tuned_bcast.c:385)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x26B94289: ompi_coll_tuned_bcast_intra_dec_fixed
</span><br>
<span class="quotelev1">&gt; (coll_tuned_decision_fixed.c:258)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1ACD55F2: PMPI_Bcast (pbcast.c:110)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x2FE1CC48: ADIOI_Shfp_fname (shfp_fname.c:67)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x2FDE3B0D: mca_io_romio_file_open
</span><br>
<span class="quotelev1">&gt; (io_romio_file_open.c:40)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1AD52344: module_init (io_base_file_select.c:455)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1AD51DFA: mca_io_base_file_select
</span><br>
<span class="quotelev1">&gt; (io_base_file_select.c:238)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1ACA582F: ompi_file_open (file.c:130)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x13F9B36F:
</span><br>
<span class="quotelev1">&gt; PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, std::string const&amp;, int,
</span><br>
<span class="quotelev1">&gt; ompi_file_t*&amp;, bool) (PAIO.cc:290)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0xCA44252:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::litGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;)
</span><br>
<span class="quotelev1">&gt; (Champ.cc:951)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
</span><br>
<span class="quotelev1">&gt; ==16715==  Address 0x32ef3e60 is 16 bytes after a block of size 256
</span><br>
<span class="quotelev1">&gt; alloc'd
</span><br>
<span class="quotelev1">&gt; ==16715==    at 0x4C2C5A4: malloc (vg_replace_malloc.c:296)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x2FE1C78E: ADIOI_Malloc_fn (malloc.c:50)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x2FE1C951: ADIOI_Shfp_fname (shfp_fname.c:25)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x2FDE3B0D: mca_io_romio_file_open
</span><br>
<span class="quotelev1">&gt; (io_romio_file_open.c:40)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1AD52344: module_init (io_base_file_select.c:455)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1AD51DFA: mca_io_base_file_select
</span><br>
<span class="quotelev1">&gt; (io_base_file_select.c:238)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1ACA582F: ompi_file_open (file.c:130)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x13F9B36F:
</span><br>
<span class="quotelev1">&gt; PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, std::string const&amp;, int,
</span><br>
<span class="quotelev1">&gt; ompi_file_t*&amp;, bool) (PAIO.cc:290)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0xCA44252:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::litGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;)
</span><br>
<span class="quotelev1">&gt; (Champ.cc:951)
</span><br>
<span class="quotelev1">&gt; ==16715==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
</span><br>
<span class="quotelev1">&gt; ==16715==
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *************************************************
</span><br>
<span class="quotelev1">&gt; Rank 0:
</span><br>
<span class="quotelev1">&gt; *************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==16714== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt; ==16714==    at 0x4C2CA74: __strrchr_sse42 (vg_replace_strmem.c:194)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FE1CAB7: ADIOI_Shfp_fname (shfp_fname.c:51)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDE3B0D: mca_io_romio_file_open
</span><br>
<span class="quotelev1">&gt; (io_romio_file_open.c:40)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD51DFA: mca_io_base_file_select
</span><br>
<span class="quotelev1">&gt; (io_base_file_select.c:238)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x13F9B36F:
</span><br>
<span class="quotelev1">&gt; PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, std::string const&amp;, int,
</span><br>
<span class="quotelev1">&gt; ompi_file_t*&amp;, bool) (PAIO.cc:290)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA44252:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::litGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;)
</span><br>
<span class="quotelev1">&gt; (Champ.cc:951)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
</span><br>
<span class="quotelev1">&gt; ==16714==  Address 0x219377d0 is 0 bytes after a block of size 256
</span><br>
<span class="quotelev1">&gt; alloc'd
</span><br>
<span class="quotelev1">&gt; ==16714==    at 0x4C2C5A4: malloc (vg_replace_malloc.c:296)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FE1C78E: ADIOI_Malloc_fn (malloc.c:50)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FE1C951: ADIOI_Shfp_fname (shfp_fname.c:25)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDE3B0D: mca_io_romio_file_open
</span><br>
<span class="quotelev1">&gt; (io_romio_file_open.c:40)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD51DFA: mca_io_base_file_select
</span><br>
<span class="quotelev1">&gt; (io_base_file_select.c:238)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x13F9B36F:
</span><br>
<span class="quotelev1">&gt; PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, std::string const&amp;, int,
</span><br>
<span class="quotelev1">&gt; ompi_file_t*&amp;, bool) (PAIO.cc:290)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA44252:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::litGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;)
</span><br>
<span class="quotelev1">&gt; (Champ.cc:951)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
</span><br>
<span class="quotelev1">&gt; ==16714==
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ==16714== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt; ==16714==    at 0x4C2D034: strlen (vg_replace_strmem.c:412)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FE1CB81: ADIOI_Shfp_fname (shfp_fname.c:61)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDE3B0D: mca_io_romio_file_open
</span><br>
<span class="quotelev1">&gt; (io_romio_file_open.c:40)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD51DFA: mca_io_base_file_select
</span><br>
<span class="quotelev1">&gt; (io_base_file_select.c:238)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x13F9B36F:
</span><br>
<span class="quotelev1">&gt; PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, std::string const&amp;, int,
</span><br>
<span class="quotelev1">&gt; ompi_file_t*&amp;, bool) (PAIO.cc:290)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA44252:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::litGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;)
</span><br>
<span class="quotelev1">&gt; (Champ.cc:951)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
</span><br>
<span class="quotelev1">&gt; ==16714==  Address 0x219377d0 is 0 bytes after a block of size 256
</span><br>
<span class="quotelev1">&gt; alloc'd
</span><br>
<span class="quotelev1">&gt; ==16714==    at 0x4C2C5A4: malloc (vg_replace_malloc.c:296)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FE1C78E: ADIOI_Malloc_fn (malloc.c:50)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FE1C951: ADIOI_Shfp_fname (shfp_fname.c:25)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDE3B0D: mca_io_romio_file_open
</span><br>
<span class="quotelev1">&gt; (io_romio_file_open.c:40)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD51DFA: mca_io_base_file_select
</span><br>
<span class="quotelev1">&gt; (io_base_file_select.c:238)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x13F9B36F:
</span><br>
<span class="quotelev1">&gt; PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, std::string const&amp;, int,
</span><br>
<span class="quotelev1">&gt; ompi_file_t*&amp;, bool) (PAIO.cc:290)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA44252:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::litGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;)
</span><br>
<span class="quotelev1">&gt; (Champ.cc:951)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ==16714== Invalid read of size 2
</span><br>
<span class="quotelev1">&gt; ==16714==    at 0x4C2E79E: memcpy@@GLIBC_2.14 (vg_replace_strmem.c:915)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2543FADC: vader_prepare_src (btl_vader_module.c:590)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x25AB17AA: mca_bml_base_prepare_src (bml.h:341)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x25AB4207: mca_pml_ob1_send_request_start_prepare
</span><br>
<span class="quotelev1">&gt; (pml_ob1_sendreq.c:620)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x25AA3519: mca_pml_ob1_send_request_start_btl
</span><br>
<span class="quotelev1">&gt; (pml_ob1_sendreq.h:397)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x25AA3766: mca_pml_ob1_send_request_start_seq
</span><br>
<span class="quotelev1">&gt; (pml_ob1_sendreq.h:460)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x25AA41E1: mca_pml_ob1_isend (pml_ob1_isend.c:171)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x26BA2AF5: ompi_coll_tuned_bcast_intra_generic
</span><br>
<span class="quotelev1">&gt; (coll_tuned_bcast.c:112)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x26BA36F7: ompi_coll_tuned_bcast_intra_binomial
</span><br>
<span class="quotelev1">&gt; (coll_tuned_bcast.c:385)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x26B94289: ompi_coll_tuned_bcast_intra_dec_fixed
</span><br>
<span class="quotelev1">&gt; (coll_tuned_decision_fixed.c:258)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1ACD55F2: PMPI_Bcast (pbcast.c:110)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FE1CBE5: ADIOI_Shfp_fname (shfp_fname.c:63)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDE3B0D: mca_io_romio_file_open
</span><br>
<span class="quotelev1">&gt; (io_romio_file_open.c:40)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD51DFA: mca_io_base_file_select
</span><br>
<span class="quotelev1">&gt; (io_base_file_select.c:238)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x13F9B36F:
</span><br>
<span class="quotelev1">&gt; PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, std::string const&amp;, int,
</span><br>
<span class="quotelev1">&gt; ompi_file_t*&amp;, bool) (PAIO.cc:290)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA44252:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::litGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;)
</span><br>
<span class="quotelev1">&gt; (Champ.cc:951)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
</span><br>
<span class="quotelev1">&gt; ==16714==  Address 0x219377d0 is 0 bytes after a block of size 256
</span><br>
<span class="quotelev1">&gt; alloc'd
</span><br>
<span class="quotelev1">&gt; ==16714==    at 0x4C2C5A4: malloc (vg_replace_malloc.c:296)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FE1C78E: ADIOI_Malloc_fn (malloc.c:50)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FE1C951: ADIOI_Shfp_fname (shfp_fname.c:25)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDE3B0D: mca_io_romio_file_open
</span><br>
<span class="quotelev1">&gt; (io_romio_file_open.c:40)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD51DFA: mca_io_base_file_select
</span><br>
<span class="quotelev1">&gt; (io_base_file_select.c:238)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x13F9B36F:
</span><br>
<span class="quotelev1">&gt; PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, std::string const&amp;, int,
</span><br>
<span class="quotelev1">&gt; ompi_file_t*&amp;, bool) (PAIO.cc:290)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA44252:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::litGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;)
</span><br>
<span class="quotelev1">&gt; (Champ.cc:951)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ==16714== Invalid read of size 2
</span><br>
<span class="quotelev1">&gt; ==16714==    at 0x4C2E790: memcpy@@GLIBC_2.14 (vg_replace_strmem.c:915)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2543FADC: vader_prepare_src (btl_vader_module.c:590)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x25AB17AA: mca_bml_base_prepare_src (bml.h:341)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x25AB4207: mca_pml_ob1_send_request_start_prepare
</span><br>
<span class="quotelev1">&gt; (pml_ob1_sendreq.c:620)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x25AA3519: mca_pml_ob1_send_request_start_btl
</span><br>
<span class="quotelev1">&gt; (pml_ob1_sendreq.h:397)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x25AA3766: mca_pml_ob1_send_request_start_seq
</span><br>
<span class="quotelev1">&gt; (pml_ob1_sendreq.h:460)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x25AA41E1: mca_pml_ob1_isend (pml_ob1_isend.c:171)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x26BA2AF5: ompi_coll_tuned_bcast_intra_generic
</span><br>
<span class="quotelev1">&gt; (coll_tuned_bcast.c:112)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x26BA36F7: ompi_coll_tuned_bcast_intra_binomial
</span><br>
<span class="quotelev1">&gt; (coll_tuned_bcast.c:385)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x26B94289: ompi_coll_tuned_bcast_intra_dec_fixed
</span><br>
<span class="quotelev1">&gt; (coll_tuned_decision_fixed.c:258)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1ACD55F2: PMPI_Bcast (pbcast.c:110)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FE1CBE5: ADIOI_Shfp_fname (shfp_fname.c:63)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDE3B0D: mca_io_romio_file_open
</span><br>
<span class="quotelev1">&gt; (io_romio_file_open.c:40)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD51DFA: mca_io_base_file_select
</span><br>
<span class="quotelev1">&gt; (io_base_file_select.c:238)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x13F9B36F:
</span><br>
<span class="quotelev1">&gt; PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, std::string const&amp;, int,
</span><br>
<span class="quotelev1">&gt; ompi_file_t*&amp;, bool) (PAIO.cc:290)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA44252:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::litGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;)
</span><br>
<span class="quotelev1">&gt; (Champ.cc:951)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
</span><br>
<span class="quotelev1">&gt; ==16714==  Address 0x219377d2 is 2 bytes after a block of size 256
</span><br>
<span class="quotelev1">&gt; alloc'd
</span><br>
<span class="quotelev1">&gt; ==16714==    at 0x4C2C5A4: malloc (vg_replace_malloc.c:296)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FE1C78E: ADIOI_Malloc_fn (malloc.c:50)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FE1C951: ADIOI_Shfp_fname (shfp_fname.c:25)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDE3B0D: mca_io_romio_file_open
</span><br>
<span class="quotelev1">&gt; (io_romio_file_open.c:40)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD51DFA: mca_io_base_file_select
</span><br>
<span class="quotelev1">&gt; (io_base_file_select.c:238)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x13F9B36F:
</span><br>
<span class="quotelev1">&gt; PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, std::string const&amp;, int,
</span><br>
<span class="quotelev1">&gt; ompi_file_t*&amp;, bool) (PAIO.cc:290)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA44252:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::litGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;)
</span><br>
<span class="quotelev1">&gt; (Champ.cc:951)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ==16714== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt; ==16714==    at 0x4C2E7B8: memcpy@@GLIBC_2.14 (vg_replace_strmem.c:915)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2543FADC: vader_prepare_src (btl_vader_module.c:590)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x25AB17AA: mca_bml_base_prepare_src (bml.h:341)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x25AB4207: mca_pml_ob1_send_request_start_prepare
</span><br>
<span class="quotelev1">&gt; (pml_ob1_sendreq.c:620)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x25AA3519: mca_pml_ob1_send_request_start_btl
</span><br>
<span class="quotelev1">&gt; (pml_ob1_sendreq.h:397)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x25AA3766: mca_pml_ob1_send_request_start_seq
</span><br>
<span class="quotelev1">&gt; (pml_ob1_sendreq.h:460)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x25AA41E1: mca_pml_ob1_isend (pml_ob1_isend.c:171)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x26BA2AF5: ompi_coll_tuned_bcast_intra_generic
</span><br>
<span class="quotelev1">&gt; (coll_tuned_bcast.c:112)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x26BA36F7: ompi_coll_tuned_bcast_intra_binomial
</span><br>
<span class="quotelev1">&gt; (coll_tuned_bcast.c:385)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x26B94289: ompi_coll_tuned_bcast_intra_dec_fixed
</span><br>
<span class="quotelev1">&gt; (coll_tuned_decision_fixed.c:258)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1ACD55F2: PMPI_Bcast (pbcast.c:110)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FE1CBE5: ADIOI_Shfp_fname (shfp_fname.c:63)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDE3B0D: mca_io_romio_file_open
</span><br>
<span class="quotelev1">&gt; (io_romio_file_open.c:40)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD51DFA: mca_io_base_file_select
</span><br>
<span class="quotelev1">&gt; (io_base_file_select.c:238)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x13F9B36F:
</span><br>
<span class="quotelev1">&gt; PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, std::string const&amp;, int,
</span><br>
<span class="quotelev1">&gt; ompi_file_t*&amp;, bool) (PAIO.cc:290)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA44252:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::litGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;)
</span><br>
<span class="quotelev1">&gt; (Champ.cc:951)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
</span><br>
<span class="quotelev1">&gt; ==16714==  Address 0x219377e0 is 16 bytes after a block of size 256
</span><br>
<span class="quotelev1">&gt; alloc'd
</span><br>
<span class="quotelev1">&gt; ==16714==    at 0x4C2C5A4: malloc (vg_replace_malloc.c:296)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FE1C78E: ADIOI_Malloc_fn (malloc.c:50)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FE1C951: ADIOI_Shfp_fname (shfp_fname.c:25)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x2FDE3B0D: mca_io_romio_file_open
</span><br>
<span class="quotelev1">&gt; (io_romio_file_open.c:40)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD51DFA: mca_io_base_file_select
</span><br>
<span class="quotelev1">&gt; (io_base_file_select.c:238)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x13F9B36F:
</span><br>
<span class="quotelev1">&gt; PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, std::string const&amp;, int,
</span><br>
<span class="quotelev1">&gt; ompi_file_t*&amp;, bool) (PAIO.cc:290)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA44252:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::litGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;)
</span><br>
<span class="quotelev1">&gt; (Champ.cc:951)
</span><br>
<span class="quotelev1">&gt; ==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have to precise that with MPICH 3.1.3, I can't reproduce the same
</span><br>
<span class="quotelev1">&gt; bad behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, the segfault is not always there: running the same code with
</span><br>
<span class="quotelev1">&gt; other inputs, gave me trouble-free results with or without valgrind.
</span><br>
<span class="quotelev1">&gt; I noticed the problem appears mors frequently with longer &quot;paths&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please, help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info -all :
</span><br>
<span class="quotelev1">&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.184rc3.txt.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.184rc3.txt.gz</a>
</span><br>
<span class="quotelev1">&gt; config.log:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184rc3.log.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184rc3.log.gz</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25983.php">http://www.open-mpi.org/community/lists/users/2014/12/25983.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25987.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="25985.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>In reply to:</strong> <a href="25983.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25987.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="25987.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="25989.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
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

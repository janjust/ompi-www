<?
$subject_val = "Re: [OMPI users] compilation problem with ifort";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 19:55:09 2014" -->
<!-- isoreceived="20140903235509" -->
<!-- sent="Wed, 03 Sep 2014 19:57:43 -0400" -->
<!-- isosent="20140903235743" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation problem with ifort" -->
<!-- id="5407AAF7.4070202_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5407A6B9.3020000_at_iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] compilation problem with ifort<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 19:57:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25262.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Previous message:</strong> <a href="25260.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>In reply to:</strong> <a href="25259.php">Ray Sheppard: "Re: [OMPI users] compilation problem with ifort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25260.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ray, Elio, list
<br>
<p>Hmmm ... somehow I didn't need to do &quot;make all&quot; in the QE top
<br>
directory before doing &quot;make&quot; in the EPW top directory.
<br>
Please, see the email that I just sent to the list.
<br>
I stopped in the QE configure step as per the recipe in the EPW site.
<br>
I presume the latter &quot;make&quot; takes care of the former, or not?
<br>
<p>Besides epw.x in the EPW bin directory,
<br>
I ended up with several executables in the QE bin directory as well:
<br>
dynmat.x  iotk  iotk_print_kinds.x  iotk.x  matdyn.x  ph.x  pw.x  q2r.x
<br>
<p>I would guess the relative location of the top QE and
<br>
top EPW directory (which per the recipe is right below the top QE)
<br>
plays a role.
<br>
<p>Anyway, phonons are not my playground,
<br>
just trying to help two-cent-wise,
<br>
although this is not really an MPI or OpenMPI issue,
<br>
more or a Makefile/configure issue specific to QE and EPW.
<br>
<p>Thanks,
<br>
Gus Correa
<br>
<p>On 09/03/2014 07:39 PM, Ray Sheppard wrote:
<br>
<span class="quotelev1">&gt; Hi Elio and everyone,
</span><br>
<span class="quotelev1">&gt;    I went to the EPW website and their instructions seem lacking with
</span><br>
<span class="quotelev1">&gt; respect to The Quantum-Expresso 4.0.3 requirement.  The EPW folks want
</span><br>
<span class="quotelev1">&gt; to leverage Quantum Expresso intermediate object files.  By knowing how
</span><br>
<span class="quotelev1">&gt; it builds and telling you where to put their package, they can then
</span><br>
<span class="quotelev1">&gt; navigate relative to their make to link the files they want.
</span><br>
<span class="quotelev1">&gt;    Unfortunately, their instructions end with ./configure.  I think if
</span><br>
<span class="quotelev1">&gt; you look, you will see the Expresso object files were never built.
</span><br>
<span class="quotelev1">&gt; Instead, you should look up the complete installation instructions from
</span><br>
<span class="quotelev1">&gt; the Quantum Expresso folks. It might be as simple as &quot;make all&quot; but I
</span><br>
<span class="quotelev1">&gt; can guarantee there is more to be done.  Once you check that it
</span><br>
<span class="quotelev1">&gt; actually works, you can finish with the EPW specific instructions.  Of
</span><br>
<span class="quotelev1">&gt; course, these are just my two cents :)
</span><br>
<span class="quotelev1">&gt;              Ray
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/3/2014 7:10 PM, Jonathan Dursi (SN) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	  Original Message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *From: *Elio Physics
</span><br>
<span class="quotelev2">&gt;&gt; *Sent: *Wednesday, September 3, 2014 6:48 PM
</span><br>
<span class="quotelev2">&gt;&gt; *To: *Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; *Reply To: *Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; *Subject: *Re: [OMPI users] compilation problem with ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have already done all of the steps you mentioned. I have installed
</span><br>
<span class="quotelev2">&gt;&gt; the older version of quantum espresso, configured it and followed all
</span><br>
<span class="quotelev2">&gt;&gt; the steps on the EPW website when I got that error in the last steo;
</span><br>
<span class="quotelev2">&gt;&gt; In fact I do have the latest version of quantum espresso but since I
</span><br>
<span class="quotelev2">&gt;&gt; work with electron phonon and EPW seemed really promising and less
</span><br>
<span class="quotelev2">&gt;&gt; time consuming, I decided to give it a try.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason I have asked my question in this forum because once I had a
</span><br>
<span class="quotelev2">&gt;&gt; similar &quot;compiler&quot; issue (not the same as this one) and when i asked
</span><br>
<span class="quotelev2">&gt;&gt; on the Quantum Espresso (QE) website, one of the answers was, this is
</span><br>
<span class="quotelev2">&gt;&gt; not the right since this is a compiler problem not a QE issue so I was
</span><br>
<span class="quotelev2">&gt;&gt; really trying to avoid such answers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyhow, I guess you are absolutely right. I will try to e-mail the EPW
</span><br>
<span class="quotelev2">&gt;&gt; people and explain the situation; after all they should be able to
</span><br>
<span class="quotelev2">&gt;&gt; help. Thanks for your advice and time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ELIO MOUJAESS
</span><br>
<span class="quotelev2">&gt;&gt; University of Rondonia
</span><br>
<span class="quotelev2">&gt;&gt; Brasil
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Date: Wed, 3 Sep 2014 18:19:25 -0400
</span><br>
<span class="quotelev3">&gt;&gt; &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subject: Re: [OMPI users] compilation problem with ifort
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It is hard to tell why, but the object files (yes a2f.o, etc)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; seem not to have been compiled from the corresponding source files
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (a2f.f90 or similar).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; In general the executable (your epw.x) is compiled only after all
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the pre-requisite object files (the .o) and modules (the .mod)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; have been compiled already.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; In many cases there is not only one Makefile, but a chain/tree of
</span><br>
<span class="quotelev3">&gt;&gt; &gt; them, to compile the code in the source directory tree (under src).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Also, it is a bit awkward that you don't seem to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; have configured anything,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; i.e., telling where MPI was installed, etc,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; but that may just not be in your email.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Phonons is not my league, just trying to help, but afraid I may
</span><br>
<span class="quotelev3">&gt;&gt; &gt; not take you in the right direction.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Did you do the installation as per the EPW web site? (I just found it):
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://epw.org.uk/Main/DownloadAndInstall">http://epw.org.uk/Main/DownloadAndInstall</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It seems to require QuantumExpresso.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Did you get it, configure it, etc?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Do they have a mailing list or bulletin board where you could get
</span><br>
<span class="quotelev3">&gt;&gt; &gt; specific help for their software?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (Either on EPW or on QuantumExpresso (which seems to be required):
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.quantum-espresso.org/">http://www.quantum-espresso.org/</a>)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; That would probably be the right forum to ask your questions.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; My two cents,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On 09/03/2014 05:51 PM, Elio Physics wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; This was the first error yes. What do you mean other files are
</span><br>
<span class="quotelev2">&gt;&gt; missing?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Do you mean the atom.o, basic_algebra_routines.o.......? Well the f90
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; files present in the src subdirectory start from a2f.90
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; , allocate_epwq.o,...and so on... I am not also sure why there is that
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; slash &quot;\&quot; just before the &quot;a2f.o&quot;.... Is there a way to know what is
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; going on? I mean what are the first steps?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Thank you
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; ELIO MOUJAES
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Univeristy of Rondonia
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Brazil
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Date: Wed, 3 Sep 2014 17:43:44 -0400
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Subject: Re: [OMPI users] compilation problem with ifort
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Was the error that you listed the *first* error?
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Apparently various object files are missing from the
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; ../../Modules/ directory, and were not compiled,
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; suggesting something is amiss even before the
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; compilation of the executable (epw.x).
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; On 09/03/2014 05:20 PM, Elio Physics wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; I am really a beginner in Fortran and Linux. I was trying to
</span><br>
<span class="quotelev2">&gt;&gt; compile a
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; software (EPW). Everything was going fine (or maybe this is what I
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; think):
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; mpif90 -o epw.x ../../Modules/atom.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ../../Modules/basic_algebra_routines.o ../../Modules/cell_base.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ../../Modules/check_stop.o ../../Modules/clocks.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ../../Modules/constraints_module.o ../../Modules/control_flags.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ../../Modules/descriptors.o ../../Modules/dspev_drv.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ../../Modules/electrons_base.o ../../Modules/error_handler.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ../../Modules/exc_t.o ../../Modules/fft_base.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ../../Modules/fft_parallel.o ../../Modules/fft_scalar.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ../../Modules/fft_types.o ../../Modules/functionals.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ../../Modules/input_parameters.o ../../Modules/io_files.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ../../Modules/io_global.o ../../Modules/ions_base.o
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; ../../Modules/kind.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ../../Modules/metagga.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ..................................................\ a2f.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; allocate_epwq.o bcast_epw_input.o broyden.o close_epw.o
</span><br>
<span class="quotelev2">&gt;&gt; constants_epw.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; create_mesh.o create_mesh_mp.o createkmap.o dasmio.o
</span><br>
<span class="quotelev2">&gt;&gt; deallocate_epw.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; deallocate_eliashberg.o distribution.o dmebloch2wan.o
</span><br>
<span class="quotelev2">&gt;&gt; dmewan2bloch.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; dvanqq2.o dvqpsi_us3.o dvqpsi_us_only3.o dynbloch2wan.o
</span><br>
<span class="quotelev2">&gt;&gt; dynwan2bloch.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; eliashberg.o
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; Then I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'a2f.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'allocate_epwq.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'bcast_epw_input.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'broyden.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'close_epw.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'constants_epw.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'create_mesh.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'create_mesh_mp.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'createkmap.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'dasmio.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'deallocate_epw.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'deallocate_eliashberg.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'distribution.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'dmebloch2wan.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'dmewan2bloch.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'dvanqq2.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'dvqpsi_us3.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'dvqpsi_us_only3.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'dynbloch2wan.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'dynwan2bloch.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'eliashberg.o'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ifort: error #10236: File not found: 'eliashbergcom.
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; make[1]: *** [epw] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; `/home_cluster/fis718/eliemouj/espresso-4.0.3/EPW-3.0.0/src'
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; make: *** [epw] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; I reckon that there is an error in the Makefile. However the
</span><br>
<span class="quotelev2">&gt;&gt; Makefile
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; content is just:
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; &quot;default: epw
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; all: epw
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; epw:
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; (cd src ; make )
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; (cd bin ; ln -fs ../src/epw.x . )
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; clean:
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; cd src ; rm -f *.o *.mod *.F90 *~
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; release:
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; cd ../ ; cp -r EPW EPW-release; cd EPW-release ; \
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; rm -f src/*.o src/*.mod src/*.F90 src/*~ ; \
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; rm bin/*.x ; \
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; rm -rf examples/*/epw/out/* examples/*/epw/tmp/* \
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; examples/*/phonons/out/* examples/*/phonons/tmp/* \
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; examples/*/phonons/save/* ; \
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; rm -rf .svn */.svn */*/*.svn */*/*/*.svn */*/*/*/*.svn
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; cd .. ; tar cfz EPW/EPW-release.tgz EPW-release ; \
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; rm -rf EPW-release ; cd EPW &quot;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; Please can anyone help me and guide me how to fix this error
</span><br>
<span class="quotelev2">&gt;&gt; step by
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; step as I am no FOrtran or Linux professional
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; ELIO MOUJAES
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; University of Rondonia
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; Brazil
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25253.php">http://www.open-mpi.org/community/lists/users/2014/09/25253.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25254.php">http://www.open-mpi.org/community/lists/users/2014/09/25254.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25255.php">http://www.open-mpi.org/community/lists/users/2014/09/25255.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25256.php">http://www.open-mpi.org/community/lists/users/2014/09/25256.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/09/25258.php">http://www.open-mpi.org/community/lists/users/2014/09/25258.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25259.php">http://www.open-mpi.org/community/lists/users/2014/09/25259.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25262.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Previous message:</strong> <a href="25260.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>In reply to:</strong> <a href="25259.php">Ray Sheppard: "Re: [OMPI users] compilation problem with ifort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25260.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
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

checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking how to create a ustar tar archive... gnutar

============================================================================
== Configuring Open MPI
============================================================================

*** Checking versions
checking Open MPI version... 1.3.2
checking Open MPI release date... Apr 21, 2009
checking Open MPI Subversion repository version... r21054
checking Open Run-Time Environment version... 1.3.2
checking Open Run-Time Environment release date... Apr 21, 2009
checking Open Run-Time Environment Subversion repository version... r21054
checking Open Portable Access Layer version... 1.3.2
checking Open Portable Access Layer release date... Apr 21, 2009
checking Open Portable Access Layer Subversion repository version... r21054

*** Initialization, setup
configure: builddir: /usr/local/src/openmpi-1.3.2
configure: srcdir: /usr/local/src/openmpi-1.3.2
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
installing to directory "/opt/intelsoft/openmpi/openmpi-1.3.2"

*** Configuration options
checking whether to run code coverage... no
checking whether to compile with branch probabilities... no
checking whether to debug memory usage... no
checking whether to profile memory usage... no
checking if want developer-level compiler pickyness... no
checking if want developer-level debugging code... no
checking if want sparse process groups... no
checking if want Fortran 77 bindings... yes
checking if want Fortran 90 bindings... yes
checking desired Fortran 90 bindings "size"... small
checking whether to enable PMPI... yes
checking if want C++ bindings... yes
checking if want MPI::SEEK_SET support... yes
checking if want to enable weak symbol support... yes
checking if want run-time MPI parameter checking... runtime
checking if want to install OMPI header files... no
checking if want pretty-print stacktrace... yes
checking if peruse support is required... no
checking max supported array dimension in F90 MPI bindings... 4
checking if pty support should be enabled... yes
checking if user wants dlopen support... yes
checking if heterogeneous support should be enabled... no
checking if want trace file debugging... no
checking if want full RTE support... yes
checking if want fault tolerance... Disabled fault tolerance
checking if want IPv6 support... yes (if underlying system supports it)
checking if want orterun "--prefix" behavior to be enabled by default... no
checking for package/brand string... Open MPI robertson@daggoo Distribution
checking for ident string... 1.3.2
checking whether to add padding to the openib control header... no
checking whether to use an alternative checksum algo for messages... no

============================================================================
== Compiler and preprocessor tests
============================================================================

*** C compiler and preprocessor
checking for style of include used by make... GNU
checking for gcc... icc
checking for C compiler default output file name... a.out
checking whether the C compiler works... yes
checking whether we are cross compiling... no
checking for suffix of executables... 
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether icc accepts -g... yes
checking for icc option to accept ISO C89... none needed
checking dependency style of icc... gcc3
checking whether icc and cc understand -c and -o together... yes
checking how to run the C preprocessor... icc -E
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for the C compiler vendor... intel
checking for ANSI C header files... yes
checking if icc supports -finline-functions... yes
checking if icc supports -fno-strict-aliasing... yes
configure: WARNING:  -fno-strict-aliasing has been added to CFLAGS
checking if icc supports -restrict... yes
configure: WARNING:  -restrict has been added to CFLAGS
checking if icc supports __builtin_expect... yes
checking if icc supports __builtin_prefetch... yes
checking for C optimization flags... -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict
checking for Interix environment... no
checking for C ident string support... #pragma ident
checking for sys/types.h... yes
checking for sys/stat.h... yes
checking for stdlib.h... yes
checking for string.h... yes
checking for memory.h... yes
checking for strings.h... yes
checking for inttypes.h... yes
checking for stdint.h... yes
checking for unistd.h... yes
checking for long long... yes
checking for long double... yes
checking for int8_t... yes
checking for uint8_t... yes
checking for int16_t... yes
checking for uint16_t... yes
checking for int32_t... yes
checking for uint32_t... yes
checking for int64_t... yes
checking for uint64_t... yes
checking for intptr_t... yes
checking for uintptr_t... yes
checking for mode_t... yes
checking for ssize_t... yes
checking for ptrdiff_t... yes
checking size of char... 1
checking size of short... 2
checking size of int... 4
checking size of long... 8
checking size of long long... 8
checking size of long double... 16
checking size of float... 4
checking size of double... 8
checking size of void *... 8
checking size of size_t... 8
checking size of ssize_t... 8
checking size of ptrdiff_t... 8
checking alignment of char... 1
checking alignment of short... 2
checking alignment of wchar_t... 4
checking alignment of int... 4
checking alignment of long... 8
checking alignment of long long... 8
checking alignment of float... 4
checking alignment of double... 8
checking alignment of long double... 16
checking alignment of void *... 8
checking for C bool type... no
checking for inline... __inline__
checking for C/C++ restrict keyword... __restrict
checking for weak symbol support... yes
checking whether icc-8.1 for EM64T works with variable arguments... yes

*** C++ compiler and preprocessor
checking whether we are using the GNU C++ compiler... yes
checking whether icpc accepts -g... yes
checking dependency style of icpc... gcc3
checking how to run the C++ preprocessor... icpc -E
checking for the C++ compiler vendor... intel
checking if C++ compiler works... yes
checking if icpc supports -finline-functions... yes
configure: WARNING:  -finline-functions has been added to CXXFLAGS
checking if want C++ exception handling... no
checking if C and C++ are link compatible... yes
checking for C++ template_repository_directory... not used
checking for C++ compiler template parameters... none needed
checking if icpc supports __builtin_expect... yes
checking if icpc supports __builtin_prefetch... yes
checking if icpc supports const_cast<> properly... yes
checking for C++ optimization flags... -O3 -DNDEBUG -finline-functions
checking for C++ ident string support... #pragma ident
checking size of bool... 1
checking alignment of bool... 1
checking for __attribute__... yes
checking for __attribute__(aligned)... yes
checking for __attribute__(always_inline)... yes
checking for __attribute__(cold)... no
checking for __attribute__(const)... yes
checking for __attribute__(deprecated)... yes
checking for __attribute__(format)... yes
checking for __attribute__(hot)... no
checking for __attribute__(malloc)... yes
checking for __attribute__(may_alias)... no
checking for __attribute__(no_instrument_function)... yes
checking for __attribute__(nonnull)... yes
checking for __attribute__(noreturn)... yes
checking for __attribute__(packed)... yes
checking for __attribute__(pure)... yes
checking for __attribute__(sentinel)... yes
checking for __attribute__(unused)... yes
checking for __attribute__(visibility)... yes
checking for __attribute__(warn_unused_result)... no
checking for __attribute__(weak_alias)... yes

*** Assembler
checking dependency style of icc... gcc3
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
checking the name lister (/usr/bin/nm -B) interface... BSD nm
checking for fgrep... /bin/grep -F
checking if need to remove -g from CCASFLAGS... no
checking whether to enable smp locks... yes
checking if .proc/endp is needed... no
checking directive for setting text section... .text
checking directive for exporting symbols... .globl
checking for objdump... objdump
checking if .note.GNU-stack is needed... yes
checking suffix for labels... :
checking prefix for global symbol labels... 
checking prefix for lsym labels... .L
checking prefix for function in .type... @
checking if .size is needed... yes
checking if .align directive takes logarithmic value... no
checking if icc supports GCC inline assembly... yes
checking if icc supports DEC inline assembly... no
checking if icc supports XLC inline assembly... no
checking if icpc supports GCC inline assembly... yes
checking if icpc supports DEC inline assembly... no
checking if icpc supports XLC inline assembly... no
checking for assembly format... default-.text-.globl-:--.L-@-1-0-1-1-1
checking for asssembly architecture... AMD64
checking for perl... perl
checking for pre-built assembly file... yes (atomic-amd64-linux.s)
checking for atomic assembly filename... atomic-amd64-linux.s

*** Fortran 77 compiler
checking whether we are using the GNU Fortran 77 compiler... no
checking whether ifort accepts -g... yes
checking if Fortran 77 compiler works... yes
checking ifort external symbol convention... single underscore
checking if C and Fortran 77 are link compatible... yes
checking to see if F77 compiler likes the C++ exception flags... skipped (no C++ exceptions flags)
checking if Fortran 77 compiler supports LOGICAL... yes
checking size of Fortran 77 LOGICAL... 4
checking for C type corresponding to LOGICAL... int
checking alignment of Fortran LOGICAL... 1
checking if Fortran 77 compiler supports LOGICAL*1... yes
checking size of Fortran 77 LOGICAL*1... 1
checking for C type corresponding to LOGICAL*1... char
checking alignment of Fortran LOGICAL*1... 1
checking if Fortran 77 compiler supports LOGICAL*2... yes
checking size of Fortran 77 LOGICAL*2... 2
checking for C type corresponding to LOGICAL*2... short
checking alignment of Fortran LOGICAL*2... 1
checking if Fortran 77 compiler supports LOGICAL*4... yes
checking size of Fortran 77 LOGICAL*4... 4
checking for C type corresponding to LOGICAL*4... int
checking alignment of Fortran LOGICAL*4... 1
checking if Fortran 77 compiler supports LOGICAL*8... yes
checking size of Fortran 77 LOGICAL*8... 8
checking for C type corresponding to LOGICAL*8... long long
checking alignment of Fortran LOGICAL*8... 1
checking if Fortran 77 compiler supports INTEGER... yes
checking size of Fortran 77 INTEGER... 4
checking for C type corresponding to INTEGER... int
checking alignment of Fortran INTEGER... 1
checking if Fortran 77 compiler supports INTEGER*1... yes
checking size of Fortran 77 INTEGER*1... 1
checking for C type corresponding to INTEGER*1... char
checking alignment of Fortran INTEGER*1... 1
checking if Fortran 77 compiler supports INTEGER*2... yes
checking size of Fortran 77 INTEGER*2... 2
checking for C type corresponding to INTEGER*2... short
checking alignment of Fortran INTEGER*2... 1
checking if Fortran 77 compiler supports INTEGER*4... yes
checking size of Fortran 77 INTEGER*4... 4
checking for C type corresponding to INTEGER*4... int
checking alignment of Fortran INTEGER*4... 1
checking if Fortran 77 compiler supports INTEGER*8... yes
checking size of Fortran 77 INTEGER*8... 8
checking for C type corresponding to INTEGER*8... long long
checking alignment of Fortran INTEGER*8... 1
checking if Fortran 77 compiler supports INTEGER*16... no
checking if Fortran 77 compiler supports REAL... yes
checking size of Fortran 77 REAL... 4
checking for C type corresponding to REAL... float
checking alignment of Fortran REAL... 1
checking if Fortran 77 compiler supports REAL*2... no
checking if Fortran 77 compiler supports REAL*4... yes
checking size of Fortran 77 REAL*4... 4
checking for C type corresponding to REAL*4... float
checking alignment of Fortran REAL*4... 1
checking if Fortran 77 compiler supports REAL*8... yes
checking size of Fortran 77 REAL*8... 8
checking for C type corresponding to REAL*8... double
checking alignment of Fortran REAL*8... 1
checking if Fortran 77 compiler supports REAL*16... yes
checking size of Fortran 77 REAL*16... 16
checking for C type corresponding to REAL*16... long double
checking alignment of Fortran REAL*16... 1
checking if REAL*16 matches bit representation of long double... no
configure: WARNING: MPI_REAL16 and MPI_COMPLEX32 support have been disabled
checking if Fortran 77 compiler supports DOUBLE PRECISION... yes
checking size of Fortran 77 DOUBLE PRECISION... 8
checking for C type corresponding to DOUBLE PRECISION... double
checking alignment of Fortran DOUBLE PRECISION... 1
checking if Fortran 77 compiler supports COMPLEX... yes
checking size of Fortran 77 COMPLEX... 8
checking alignment of Fortran COMPLEX... 1
checking if Fortran 77 compiler supports COMPLEX*8... yes
checking size of Fortran 77 COMPLEX*8... 8
checking alignment of Fortran COMPLEX*8... 1
checking if Fortran 77 compiler supports COMPLEX*16... yes
checking size of Fortran 77 COMPLEX*16... 16
checking alignment of Fortran COMPLEX*16... 1
checking if Fortran 77 compiler supports COMPLEX*32... yes
checking size of Fortran 77 COMPLEX*32... 32
checking alignment of Fortran COMPLEX*32... 1
checking for max Fortran MPI handle index... ( 0x7fffffff < 2147483647 ? 0x7fffffff : 2147483647 )
checking FORTRAN value for .TRUE. logical type... -1
checking for correct handling of FORTRAN logical arrays... yes

*** Fortran 90/95 compiler
checking whether we are using the GNU Fortran compiler... no
checking whether ifort accepts -g... yes
checking if Fortran compiler works... yes
checking whether ifort and ifort compilers are compatible... yes
checking for extra arguments to build a shard library... none needed
checking for Fortran flag to compile .f files... none
checking for Fortran flag to compile .f90 files... none
checking to see if F90 compiler likes the C++ exception flags... skipped (no C++ exceptions flags)
checking for Fortran 90 compiler module include flag... -I
checking if Fortran 90 compiler supports LOGICAL... yes
checking size of Fortran 90 LOGICAL... 4
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports LOGICAL*1... yes
checking size of Fortran 90 LOGICAL*1... 1
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports LOGICAL*2... yes
checking size of Fortran 90 LOGICAL*2... 2
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports LOGICAL*4... yes
checking size of Fortran 90 LOGICAL*4... 4
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports LOGICAL*8... yes
checking size of Fortran 90 LOGICAL*8... 8
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports INTEGER... yes
checking size of Fortran 90 INTEGER... 4
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports INTEGER*1... yes
checking size of Fortran 90 INTEGER*1... 1
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports INTEGER*2... yes
checking size of Fortran 90 INTEGER*2... 2
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports INTEGER*4... yes
checking size of Fortran 90 INTEGER*4... 4
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports INTEGER*8... yes
checking size of Fortran 90 INTEGER*8... 8
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports INTEGER*16... no
checking if Fortran 90 compiler supports REAL... yes
checking size of Fortran 90 REAL... 4
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports REAL*2... no
checking if Fortran 90 compiler supports REAL*4... yes
checking size of Fortran 90 REAL*4... 4
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports REAL*8... yes
checking size of Fortran 90 REAL*8... 8
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports REAL*16... yes
checking size of Fortran 90 REAL*16... 16
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports DOUBLE PRECISION... yes
checking size of Fortran 90 DOUBLE PRECISION... 8
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports COMPLEX... yes
checking size of Fortran 90 COMPLEX... 8
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports COMPLEX*8... yes
checking size of Fortran 90 COMPLEX*8... 8
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports COMPLEX*16... yes
checking size of Fortran 90 COMPLEX*16... 16
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports COMPLEX*32... yes
checking size of Fortran 90 COMPLEX*32... 32
checking if Fortran 77 and 90 type sizes match... yes
checking if Fortran 90 compiler supports DOUBLE COMPLEX... yes
checking size of Fortran 90 DOUBLE COMPLEX... 16
checking Fortran 90 kind of MPI_INTEGER_KIND (selected_int_kind(9))... 4
checking Fortran 90 kind of MPI_ADDRESS_KIND (selected_int_kind(18))... 8
checking Fortran 90 kind of MPI_OFFSET_KIND (selected_int_kind(18))... (cached) 8

============================================================================
== Header file tests
============================================================================
checking alloca.h usability... yes
checking alloca.h presence... yes
checking for alloca.h... yes
checking aio.h usability... yes
checking aio.h presence... yes
checking for aio.h... yes
checking arpa/inet.h usability... yes
checking arpa/inet.h presence... yes
checking for arpa/inet.h... yes
checking dirent.h usability... yes
checking dirent.h presence... yes
checking for dirent.h... yes
checking dlfcn.h usability... yes
checking dlfcn.h presence... yes
checking for dlfcn.h... yes
checking execinfo.h usability... yes
checking execinfo.h presence... yes
checking for execinfo.h... yes
checking err.h usability... yes
checking err.h presence... yes
checking for err.h... yes
checking fcntl.h usability... yes
checking fcntl.h presence... yes
checking for fcntl.h... yes
checking grp.h usability... yes
checking grp.h presence... yes
checking for grp.h... yes
checking for inttypes.h... (cached) yes
checking libgen.h usability... yes
checking libgen.h presence... yes
checking for libgen.h... yes
checking libutil.h usability... no
checking libutil.h presence... no
checking for libutil.h... no
checking netdb.h usability... yes
checking netdb.h presence... yes
checking for netdb.h... yes
checking netinet/in.h usability... yes
checking netinet/in.h presence... yes
checking for netinet/in.h... yes
checking netinet/tcp.h usability... yes
checking netinet/tcp.h presence... yes
checking for netinet/tcp.h... yes
checking poll.h usability... yes
checking poll.h presence... yes
checking for poll.h... yes
checking pthread.h usability... yes
checking pthread.h presence... yes
checking for pthread.h... yes
checking pty.h usability... yes
checking pty.h presence... yes
checking for pty.h... yes
checking pwd.h usability... yes
checking pwd.h presence... yes
checking for pwd.h... yes
checking sched.h usability... yes
checking sched.h presence... yes
checking for sched.h... yes
checking for stdint.h... (cached) yes
checking for string.h... (cached) yes
checking for strings.h... (cached) yes
checking stropts.h usability... yes
checking stropts.h presence... yes
checking for stropts.h... yes
checking sys/fcntl.h usability... yes
checking sys/fcntl.h presence... yes
checking for sys/fcntl.h... yes
checking sys/ipc.h usability... yes
checking sys/ipc.h presence... yes
checking for sys/ipc.h... yes
checking sys/ioctl.h usability... yes
checking sys/ioctl.h presence... yes
checking for sys/ioctl.h... yes
checking sys/mman.h usability... yes
checking sys/mman.h presence... yes
checking for sys/mman.h... yes
checking sys/param.h usability... yes
checking sys/param.h presence... yes
checking for sys/param.h... yes
checking sys/queue.h usability... yes
checking sys/queue.h presence... yes
checking for sys/queue.h... yes
checking sys/resource.h usability... yes
checking sys/resource.h presence... yes
checking for sys/resource.h... yes
checking sys/select.h usability... yes
checking sys/select.h presence... yes
checking for sys/select.h... yes
checking sys/socket.h usability... yes
checking sys/socket.h presence... yes
checking for sys/socket.h... yes
checking sys/sockio.h usability... no
checking sys/sockio.h presence... no
checking for sys/sockio.h... no
checking stdarg.h usability... yes
checking stdarg.h presence... yes
checking for stdarg.h... yes
checking for sys/stat.h... (cached) yes
checking sys/statvfs.h usability... yes
checking sys/statvfs.h presence... yes
checking for sys/statvfs.h... yes
checking sys/time.h usability... yes
checking sys/time.h presence... yes
checking for sys/time.h... yes
checking sys/tree.h usability... no
checking sys/tree.h presence... no
checking for sys/tree.h... no
checking for sys/types.h... (cached) yes
checking sys/uio.h usability... yes
checking sys/uio.h presence... yes
checking for sys/uio.h... yes
checking net/uio.h usability... no
checking net/uio.h presence... no
checking for net/uio.h... no
checking sys/utsname.h usability... yes
checking sys/utsname.h presence... yes
checking for sys/utsname.h... yes
checking sys/wait.h usability... yes
checking sys/wait.h presence... yes
checking for sys/wait.h... yes
checking syslog.h usability... yes
checking syslog.h presence... yes
checking for syslog.h... yes
checking time.h usability... yes
checking time.h presence... yes
checking for time.h... yes
checking termios.h usability... yes
checking termios.h presence... yes
checking for termios.h... yes
checking ulimit.h usability... yes
checking ulimit.h presence... yes
checking for ulimit.h... yes
checking for unistd.h... (cached) yes
checking util.h usability... no
checking util.h presence... no
checking for util.h... no
checking utmp.h usability... yes
checking utmp.h presence... yes
checking for utmp.h... yes
checking malloc.h usability... yes
checking malloc.h presence... yes
checking for malloc.h... yes
checking ifaddrs.h usability... yes
checking ifaddrs.h presence... yes
checking for ifaddrs.h... yes
checking sys/sysctl.h usability... yes
checking sys/sysctl.h presence... yes
checking for sys/sysctl.h... yes
checking crt_externs.h usability... no
checking crt_externs.h presence... no
checking for crt_externs.h... no
checking regex.h usability... yes
checking regex.h presence... yes
checking for regex.h... yes
checking ioLib.h usability... no
checking ioLib.h presence... no
checking for ioLib.h... no
checking sockLib.h usability... no
checking sockLib.h presence... no
checking for sockLib.h... no
checking hostLib.h usability... no
checking hostLib.h presence... no
checking for hostLib.h... no
checking shlwapi.h usability... no
checking shlwapi.h presence... no
checking for shlwapi.h... no
checking sys/synch.h usability... no
checking sys/synch.h presence... no
checking for sys/synch.h... no
checking for net/if.h... yes
checking stdbool.h usability... yes
checking stdbool.h presence... yes
checking for stdbool.h... yes
checking if <stdbool.h> works... yes

============================================================================
== Type tests
============================================================================
checking size of pid_t... 4
checking for socklen_t... yes
checking for struct sockaddr_in... yes
checking for struct sockaddr_in6... yes
checking for struct sockaddr_storage... yes
checking whether AF_UNSPEC is declared... yes
checking whether PF_UNSPEC is declared... yes
checking whether AF_INET6 is declared... yes
checking whether PF_INET6 is declared... yes
checking if SA_RESTART defined in signal.h... yes
checking for struct sockaddr.sa_len... no
checking for struct dirent.d_type... yes
checking for siginfo_t.si_fd... yes
checking for siginfo_t.si_band... yes

============================================================================
== Library and Function tests
============================================================================
checking for openpty in -lutil... yes
checking for gethostbyname in -lnsl... yes
checking for socket in -lsocket... no
checking if we need -lrt for sched_yield... no
checking for sched_yield... yes
checking if we need -lgen for dirname... no
checking for dirname... yes
checking if we need -lm for ceil... no
checking for ceil... yes
checking for asprintf... yes
checking for snprintf... yes
checking for vasprintf... yes
checking for vsnprintf... yes
checking for openpty... yes
checking for isatty... yes
checking for getpwuid... yes
checking for fork... yes
checking for waitpid... yes
checking for execve... yes
checking for pipe... yes
checking for ptsname... yes
checking for setsid... yes
checking for mmap... yes
checking for mallopt... yes
checking for tcgetpgrp... yes
checking for posix_memalign... yes
checking for strsignal... yes
checking for sysconf... yes
checking for syslog... yes
checking for regcmp... no
checking for regexec... yes
checking for regfree... yes
checking for _NSGetEnviron... no
checking for socketpair... yes
checking for strncpy_s... no
checking for _strdup... no
checking for usleep... yes
checking for mkfifo... yes
checking for htonl define... yes
checking for htonl... yes
checking whether va_copy is declared... yes
checking whether __va_copy is declared... yes
checking whether __func__ is declared... yes

============================================================================
== System-specific tests
============================================================================
checking checking for type of MPI_Offset... long long
checking checking for an MPI datatype for MPI_Offset... MPI_LONG_LONG
checking for _SC_NPROCESSORS_ONLN... yes
checking whether byte ordering is bigendian... no
checking for broken qsort... no
checking if word-sized integers must be word-size aligned... no
checking if C compiler and POSIX threads work as is... no
checking if C++ compiler and POSIX threads work as is... no
checking if F77 compiler and POSIX threads work as is... yes
checking if C compiler and POSIX threads work with -Kthread... no
checking if C compiler and POSIX threads work with -kthread... no
checking if C compiler and POSIX threads work with -pthread... yes
checking if C++ compiler and POSIX threads work with -Kthread... no
checking if C++ compiler and POSIX threads work with -kthread... no
checking if C++ compiler and POSIX threads work with -pthread... yes
checking for PTHREAD_MUTEX_ERRORCHECK_NP... yes
checking for PTHREAD_MUTEX_ERRORCHECK... yes
checking for working POSIX threads package... yes
checking if C compiler and Solaris threads work... no
checking if C++ compiler and Solaris threads work... no
checking if F77 compiler and Solaris threads work... no
checking for working Solaris threads package... no
checking for type of thread support... posix
checking if threads have different pids (pthreads on linux)... no
checking if want MPI thread support... no
checking if want asynchronous progress thread support... no
checking if want fault tolerance thread... Disabled (fault tolerance disabled --without-ft)
checking whether ln -s works... yes
checking for grep that handles long lines and -e... (cached) /bin/grep
checking for egrep... (cached) /bin/grep -E
checking dependency style of icc... (cached) gcc3
checking for flex... flex
checking lex output file root... lex.yy
checking lex library... -lfl
checking whether yytext is a pointer... yes
checking for flavor of ps to use... ps -A -o fname,pid,user
checking if build filesystem is case sensitive... yes
checking if configuring for case sensitive filesystem... yes
checking whether RLIMIT_NPROC is declared... yes
checking whether RLIMIT_MEMLOCK is declared... yes

============================================================================
== Modular Component Architecture (MCA) setup
============================================================================
checking for subdir args...  '--disable-shared' '--enable-static' '--prefix=/opt/intelsoft/openmpi/openmpi-1.3.2' 'CC=icc' 'CXX=icpc' 'F77=ifort' 'FC=ifort'
checking for bison... bison -y
checking for gcc... gcc
checking whether we are using the GNU Objective C compiler... no
checking whether gcc accepts -g... no
checking dependency style of gcc... gcc3
checking which components should be disabled... 
checking which components should be direct-linked into the library... 
checking which components should be run-time loadable... none
configure: WARNING: *** Shared libraries have been disabled (--disable-shared)
configure: WARNING: *** Building MCA components as DSOs automatically disabled
checking which components should be static... none
checking for projects containing MCA frameworks... opal, orte, ompi

*** Configuring MCA for opal
checking for frameworks for opal... backtrace, carto, crs, installdirs, maffinity, memchecker, memcpy, memory, paffinity, timer

+++ Configuring MCA framework backtrace
checking for no configure components in framework backtrace... 
checking for m4 configure components in framework backtrace... execinfo, printstack, darwin, none

--- MCA component backtrace:execinfo (m4 configuration macro)
checking for MCA component backtrace:execinfo compile mode... static
checking for execinfo.h... (cached) yes
checking if we need -lexecinfo for backtrace... no
checking for backtrace... yes
checking if MCA component backtrace:execinfo can compile... yes

--- MCA component backtrace:printstack (m4 configuration macro)
checking for MCA component backtrace:printstack compile mode... static
checking if MCA component backtrace:printstack can compile... no

--- MCA component backtrace:darwin (m4 configuration macro)
checking for MCA component backtrace:darwin compile mode... static
checking if MCA component backtrace:darwin can compile... no

--- MCA component backtrace:none (m4 configuration macro)
checking for MCA component backtrace:none compile mode... static
checking if MCA component backtrace:none can compile... no

+++ Configuring MCA framework carto
checking for no configure components in framework carto... auto_detect, file
checking for m4 configure components in framework carto... 

--- MCA component carto:auto_detect (no configuration)
checking for MCA component carto:auto_detect compile mode... static
checking if MCA component carto:auto_detect can compile... yes

--- MCA component carto:file (no configuration)
checking for MCA component carto:file compile mode... static
checking if MCA component carto:file can compile... yes

+++ Configuring MCA framework crs
checking for no configure components in framework crs... none
checking for m4 configure components in framework crs... blcr, self

--- MCA component crs:none (no configuration)
checking for MCA component crs:none compile mode... static
checking if MCA component crs:none can compile... yes

--- MCA component crs:blcr (m4 configuration macro)
checking for MCA component crs:blcr compile mode... static
checking --with-blcr value... simple ok (unspecified)
checking --with-blcr-libdir value... simple ok (unspecified)
checking if MCA component crs:blcr can compile... no

--- MCA component crs:self (m4 configuration macro)
checking for MCA component crs:self compile mode... static
checking if MCA component crs:self can compile... no

+++ Configuring MCA framework installdirs
checking for no configure components in framework installdirs... 
checking for m4 configure components in framework installdirs... env, config

--- MCA component installdirs:env (m4 configuration macro)
checking for MCA component installdirs:env compile mode... static
checking if MCA component installdirs:env can compile... yes

--- MCA component installdirs:config (m4 configuration macro)
checking for MCA component installdirs:config compile mode... static
checking if MCA component installdirs:config can compile... yes

+++ Configuring MCA framework maffinity
checking for no configure components in framework maffinity... first_use
checking for m4 configure components in framework maffinity... libnuma

--- MCA component maffinity:first_use (no configuration)
checking for MCA component maffinity:first_use compile mode... static
checking if MCA component maffinity:first_use can compile... yes

--- MCA component maffinity:libnuma (m4 configuration macro)
checking for MCA component maffinity:libnuma compile mode... static
checking --with-libnuma value... simple ok (unspecified)
checking --with-libnuma value... simple ok (unspecified)
checking numa.h usability... yes
checking numa.h presence... yes
checking for numa.h... yes
looking for library without search path
checking for numa_available in -lnuma... yes
checking whether MPOL_MF_MOVE is declared... no
checking if MCA component maffinity:libnuma can compile... yes

+++ Pre-configuring the framework memchecker
checking if --enable-memchecker was specified... no (adding "memchecker" to --enable-mca-no-build list)

+++ Configuring MCA framework memchecker
checking for no configure components in framework memchecker... 
checking for m4 configure components in framework memchecker... valgrind

--- MCA component memchecker:valgrind (m4 configuration macro)
checking for MCA component memchecker:valgrind compile mode... static
checking if MCA component memchecker:valgrind can compile... no

+++ Configuring MCA framework memcpy
checking for no configure components in framework memcpy... 
checking for m4 configure components in framework memcpy... 

+++ Configuring MCA framework memory
checking for no configure components in framework memory... 
checking for m4 configure components in framework memory... ptmalloc2, malloc_solaris

--- MCA component memory:ptmalloc2 (m4 configuration macro)
checking for MCA component memory:ptmalloc2 compile mode... static
checking for malloc.h... (cached) yes
checking link.h usability... yes
checking link.h presence... yes
checking for link.h... yes
checking whether __malloc_initialize_hook is declared... yes
checking whether sbrk is declared... yes
checking syscall.h usability... yes
checking syscall.h presence... yes
checking for syscall.h... yes
checking for syscall... yes
checking for __munmap... no
checking for __mmap... no
checking for dlsym in -ldl... yes
checking for dlsym... yes
checking if MCA component memory:ptmalloc2 can compile... yes

--- MCA component memory:malloc_solaris (m4 configuration macro)
checking for MCA component memory:malloc_solaris compile mode... static
checking if MCA component memory:malloc_solaris can compile... no

+++ Configuring MCA framework paffinity
checking for no configure components in framework paffinity... 
checking for m4 configure components in framework paffinity... linux, solaris, windows, darwin, posix

--- MCA component paffinity:linux (m4 configuration macro)
checking for MCA component paffinity:linux compile mode... static
checking for syscall... (cached) yes
checking sys/syscall.h usability... yes
checking sys/syscall.h presence... yes
checking for sys/syscall.h... yes
checking for unistd.h... (cached) yes
checking for __NR_sched_setaffinity... yes
checking for __NR_sched_getaffinity... yes
checking for PLPA building mode... included
checking if want PLPA maintainer support... disabled
checking for PLPA config prefix... opal/mca/paffinity/linux/plpa
checking for PLPA symbol prefix... opal_paffinity_linux_plpa_
checking valgrind/valgrind.h usability... yes
checking valgrind/valgrind.h presence... yes
checking for valgrind/valgrind.h... yes
checking for VALGRIND_CHECK_MEM_IS_ADDRESSABLE... no
configure: WARNING: Need Valgrind version 3.2.0 or later.
checking whether to build PLPA executables... no
checking for PLPA version... 1.3rc4
checking if MCA component paffinity:linux can compile... yes

--- MCA component paffinity:solaris (m4 configuration macro)
checking for MCA component paffinity:solaris compile mode... static
checking sys/procset.h usability... no
checking sys/procset.h presence... no
checking for sys/procset.h... no
checking if MCA component paffinity:solaris can compile... no

--- MCA component paffinity:windows (m4 configuration macro)
checking for MCA component paffinity:windows compile mode... static
checking for working GetProcessAffinityMask... no
checking if MCA component paffinity:windows can compile... no

--- MCA component paffinity:darwin (m4 configuration macro)
checking for MCA component paffinity:darwin compile mode... static
checking if MCA component paffinity:darwin can compile... no

--- MCA component paffinity:posix (m4 configuration macro)
checking for MCA component paffinity:posix compile mode... static
checking if MCA component paffinity:posix can compile... no

+++ Configuring MCA framework timer
checking for no configure components in framework timer... 
checking for m4 configure components in framework timer... catamount, aix, altix, darwin, solaris, windows, linux

--- MCA component timer:catamount (m4 configuration macro)
checking for MCA component timer:catamount compile mode... static
checking catamount/dclock.h usability... no
checking catamount/dclock.h presence... no
checking for catamount/dclock.h... no
checking if MCA component timer:catamount can compile... no

--- MCA component timer:aix (m4 configuration macro)
checking for MCA component timer:aix compile mode... static
checking for time_base_to_time... no
checking if MCA component timer:aix can compile... no

--- MCA component timer:altix (m4 configuration macro)
checking for MCA component timer:altix compile mode... static
checking sn/mmtimer.h usability... no
checking sn/mmtimer.h presence... no
checking for sn/mmtimer.h... no
checking if MCA component timer:altix can compile... no

--- MCA component timer:darwin (m4 configuration macro)
checking for MCA component timer:darwin compile mode... static
checking mach/mach_time.h usability... no
checking mach/mach_time.h presence... no
checking for mach/mach_time.h... no
checking for mach_absolute_time... no
checking if MCA component timer:darwin can compile... no

--- MCA component timer:solaris (m4 configuration macro)
checking for MCA component timer:solaris compile mode... static
checking for gethrtime... no
checking if MCA component timer:solaris can compile... no

--- MCA component timer:windows (m4 configuration macro)
checking for MCA component timer:windows compile mode... static
checking if MCA component timer:windows can compile... no

--- MCA component timer:linux (m4 configuration macro)
checking for MCA component timer:linux compile mode... static
checking if MCA component timer:linux can compile... yes

*** Configuring MCA for orte
checking for frameworks for orte... errmgr, ess, filem, grpcomm, iof, notifier, odls, oob, plm, ras, rmaps, rml, routed, snapc

+++ Configuring MCA framework errmgr
checking for no configure components in framework errmgr... default
checking for m4 configure components in framework errmgr... 

--- MCA component errmgr:default (no configuration)
checking for MCA component errmgr:default compile mode... static
checking if MCA component errmgr:default can compile... yes

+++ Configuring MCA framework ess
checking for no configure components in framework ess... 
checking for m4 configure components in framework ess... portals_utcp, cnos, alps, env, hnp, lsf, singleton, slurm, tool

--- MCA component ess:portals_utcp (m4 configuration macro)
checking for MCA component ess:portals_utcp compile mode... static
checking --with-portals value... simple ok (unspecified)
checking for PtlGetRank... no
checking if MCA component ess:portals_utcp can compile... no

--- MCA component ess:cnos (m4 configuration macro)
checking for MCA component ess:cnos compile mode... static
checking for cnos_get_rank... no
checking if MCA component ess:cnos can compile... no

--- MCA component ess:alps (m4 configuration macro)
checking for MCA component ess:alps compile mode... static
checking if MCA component ess:alps can compile... no

--- MCA component ess:env (m4 configuration macro)
checking for MCA component ess:env compile mode... static
checking if MCA component ess:env can compile... yes

--- MCA component ess:hnp (m4 configuration macro)
checking for MCA component ess:hnp compile mode... static
checking if MCA component ess:hnp can compile... yes

--- MCA component ess:lsf (m4 configuration macro)
checking for MCA component ess:lsf compile mode... static
checking --with-lsf value... simple ok (unspecified)
checking --with-lsf-libdir value... simple ok (unspecified)
checking for LSF dir... compiler default
checking for LSF library dir... linker default
checking lsf/lsbatch.h usability... no
checking lsf/lsbatch.h presence... no
checking for lsf/lsbatch.h... no
checking if MCA component ess:lsf can compile... no

--- MCA component ess:singleton (m4 configuration macro)
checking for MCA component ess:singleton compile mode... static
checking if MCA component ess:singleton can compile... yes

--- MCA component ess:slurm (m4 configuration macro)
checking for MCA component ess:slurm compile mode... static
checking for fork... (cached) yes
checking for execve... (cached) yes
checking for setpgid... yes
checking if MCA component ess:slurm can compile... yes

--- MCA component ess:tool (m4 configuration macro)
checking for MCA component ess:tool compile mode... static
checking if MCA component ess:tool can compile... yes

+++ Configuring MCA framework filem
checking for no configure components in framework filem... rsh
checking for m4 configure components in framework filem... 

--- MCA component filem:rsh (no configuration)
checking for MCA component filem:rsh compile mode... static
checking if MCA component filem:rsh can compile... yes

+++ Configuring MCA framework grpcomm
checking for no configure components in framework grpcomm... 
checking for m4 configure components in framework grpcomm... cnos, bad, basic

--- MCA component grpcomm:cnos (m4 configuration macro)
checking for MCA component grpcomm:cnos compile mode... static
checking for cnos_barrier... no
checking if MCA component grpcomm:cnos can compile... no

--- MCA component grpcomm:bad (m4 configuration macro)
checking for MCA component grpcomm:bad compile mode... static
checking if MCA component grpcomm:bad can compile... yes

--- MCA component grpcomm:basic (m4 configuration macro)
checking for MCA component grpcomm:basic compile mode... static
checking if MCA component grpcomm:basic can compile... yes

+++ Configuring MCA framework iof
checking for no configure components in framework iof... hnp, orted, tool
checking for m4 configure components in framework iof... 

--- MCA component iof:hnp (no configuration)
checking for MCA component iof:hnp compile mode... static
checking if MCA component iof:hnp can compile... yes

--- MCA component iof:orted (no configuration)
checking for MCA component iof:orted compile mode... static
checking if MCA component iof:orted can compile... yes

--- MCA component iof:tool (no configuration)
checking for MCA component iof:tool compile mode... static
checking if MCA component iof:tool can compile... yes

+++ Configuring MCA framework notifier
checking for no configure components in framework notifier... 
checking for m4 configure components in framework notifier... syslog

--- MCA component notifier:syslog (m4 configuration macro)
checking for MCA component notifier:syslog compile mode... static
checking if MCA component notifier:syslog can compile... yes

+++ Configuring MCA framework odls
checking for no configure components in framework odls... 
checking for m4 configure components in framework odls... default

--- MCA component odls:default (m4 configuration macro)
checking for MCA component odls:default compile mode... static
checking for fork... (cached) yes
checking if MCA component odls:default can compile... yes

+++ Configuring MCA framework oob
checking for no configure components in framework oob... 
checking for m4 configure components in framework oob... tcp

--- MCA component oob:tcp (m4 configuration macro)
checking for MCA component oob:tcp compile mode... static
checking for struct sockaddr_in... (cached) yes
checking if MCA component oob:tcp can compile... yes

+++ Configuring MCA framework plm
checking for no configure components in framework plm... 
checking for m4 configure components in framework plm... alps, lsf, rsh, slurm, tm, xgrid

--- MCA component plm:alps (m4 configuration macro)
checking for MCA component plm:alps compile mode... static
checking if MCA component plm:alps can compile... no

--- MCA component plm:lsf (m4 configuration macro)
checking for MCA component plm:lsf compile mode... static
checking --with-lsf value... simple ok (unspecified)
checking --with-lsf-libdir value... simple ok (unspecified)
checking for LSF dir... compiler default
checking for LSF library dir... linker default
checking lsf/lsbatch.h usability... no
checking lsf/lsbatch.h presence... no
checking for lsf/lsbatch.h... no
checking if MCA component plm:lsf can compile... no

--- MCA component plm:rsh (m4 configuration macro)
checking for MCA component plm:rsh compile mode... static
checking for fork... (cached) yes
checking if MCA component plm:rsh can compile... yes

--- MCA component plm:slurm (m4 configuration macro)
checking for MCA component plm:slurm compile mode... static
checking for fork... (cached) yes
checking for execve... (cached) yes
checking for setpgid... (cached) yes
checking if MCA component plm:slurm can compile... yes

--- MCA component plm:tm (m4 configuration macro)
checking for MCA component plm:tm compile mode... static
checking --with-tm value... simple ok (unspecified)
checking for pbs-config... not found
checking tm.h usability... no
checking tm.h presence... no
checking for tm.h... no
checking if MCA component plm:tm can compile... no

--- MCA component plm:xgrid (m4 configuration macro)
checking for MCA component plm:xgrid compile mode... static
checking if C and Objective C are link compatible... no
checking if MCA component plm:xgrid can compile... no

+++ Configuring MCA framework ras
checking for no configure components in framework ras... 
checking for m4 configure components in framework ras... alps, gridengine, loadleveler, lsf, slurm, tm

--- MCA component ras:alps (m4 configuration macro)
checking for MCA component ras:alps compile mode... static
checking if MCA component ras:alps can compile... no

--- MCA component ras:gridengine (m4 configuration macro)
checking for MCA component ras:gridengine compile mode... static
checking if user requested SGE build... not specified; checking environment
checking for qrsh... no
checking for SGE_ROOT environment variable... not found
checking if MCA component ras:gridengine can compile... no

--- MCA component ras:loadleveler (m4 configuration macro)
checking for MCA component ras:loadleveler compile mode... static
checking --with-loadleveler value... simple ok (unspecified)
checking llapi.h usability... no
checking llapi.h presence... no
checking for llapi.h... no
checking if MCA component ras:loadleveler can compile... no

--- MCA component ras:lsf (m4 configuration macro)
checking for MCA component ras:lsf compile mode... static
checking --with-lsf value... simple ok (unspecified)
checking --with-lsf-libdir value... simple ok (unspecified)
checking for LSF dir... compiler default
checking for LSF library dir... linker default
checking lsf/lsbatch.h usability... no
checking lsf/lsbatch.h presence... no
checking for lsf/lsbatch.h... no
checking if MCA component ras:lsf can compile... no

--- MCA component ras:slurm (m4 configuration macro)
checking for MCA component ras:slurm compile mode... static
checking for fork... (cached) yes
checking for execve... (cached) yes
checking for setpgid... (cached) yes
checking if MCA component ras:slurm can compile... yes

--- MCA component ras:tm (m4 configuration macro)
checking for MCA component ras:tm compile mode... static
checking --with-tm value... simple ok (unspecified)
checking for pbs-config... not found
checking tm.h usability... no
checking tm.h presence... no
checking for tm.h... no
checking if MCA component ras:tm can compile... no

+++ Configuring MCA framework rmaps
checking for no configure components in framework rmaps... rank_file, round_robin, seq
checking for m4 configure components in framework rmaps... 

--- MCA component rmaps:rank_file (no configuration)
checking for MCA component rmaps:rank_file compile mode... static
checking if MCA component rmaps:rank_file can compile... yes

--- MCA component rmaps:round_robin (no configuration)
checking for MCA component rmaps:round_robin compile mode... static
checking if MCA component rmaps:round_robin can compile... yes

--- MCA component rmaps:seq (no configuration)
checking for MCA component rmaps:seq compile mode... static
checking if MCA component rmaps:seq can compile... yes

+++ Configuring MCA framework rml
checking for no configure components in framework rml... oob
checking for m4 configure components in framework rml... ftrm

--- MCA component rml:oob (no configuration)
checking for MCA component rml:oob compile mode... static
checking if MCA component rml:oob can compile... yes

--- MCA component rml:ftrm (m4 configuration macro)
checking for MCA component rml:ftrm compile mode... static
checking if MCA component rml:ftrm can compile... no

+++ Configuring MCA framework routed
checking for no configure components in framework routed... binomial, direct, linear
checking for m4 configure components in framework routed... 

--- MCA component routed:binomial (no configuration)
checking for MCA component routed:binomial compile mode... static
checking if MCA component routed:binomial can compile... yes

--- MCA component routed:direct (no configuration)
checking for MCA component routed:direct compile mode... static
checking if MCA component routed:direct can compile... yes

--- MCA component routed:linear (no configuration)
checking for MCA component routed:linear compile mode... static
checking if MCA component routed:linear can compile... yes

+++ Configuring MCA framework snapc
checking for no configure components in framework snapc... 
checking for m4 configure components in framework snapc... full

--- MCA component snapc:full (m4 configuration macro)
checking for MCA component snapc:full compile mode... static
checking if MCA component snapc:full can compile... no

*** Configuring MCA for ompi
checking for frameworks for ompi... allocator, bml, btl, coll, common, crcp, dpm, io, mpool, mtl, osc, pml, pubsub, rcache, topo

+++ Configuring MCA framework allocator
checking for no configure components in framework allocator... basic, bucket
checking for m4 configure components in framework allocator... 

--- MCA component allocator:basic (no configuration)
checking for MCA component allocator:basic compile mode... static
checking if MCA component allocator:basic can compile... yes

--- MCA component allocator:bucket (no configuration)
checking for MCA component allocator:bucket compile mode... static
checking if MCA component allocator:bucket can compile... yes

+++ Configuring MCA framework bml
checking for no configure components in framework bml... r2
checking for m4 configure components in framework bml... 

--- MCA component bml:r2 (no configuration)
checking for MCA component bml:r2 compile mode... static
checking if MCA component bml:r2 can compile... yes

+++ Configuring MCA framework btl
checking for no configure components in framework btl... self, sm
checking for m4 configure components in framework btl... elan, gm, mx, ofud, openib, portals, tcp, udapl

--- MCA component btl:self (no configuration)
checking for MCA component btl:self compile mode... static
checking if MCA component btl:self can compile... yes

--- MCA component btl:sm (no configuration)
checking for MCA component btl:sm compile mode... static
checking if MCA component btl:sm can compile... yes

--- MCA component btl:elan (m4 configuration macro)
checking for MCA component btl:elan compile mode... static
checking --with-elan value... simple ok (unspecified)
checking --with-elan-libdir value... simple ok (unspecified)
checking elan/elan.h usability... no
checking elan/elan.h presence... no
checking for elan/elan.h... no
checking if MCA component btl:elan can compile... no

--- MCA component btl:gm (m4 configuration macro)
checking for MCA component btl:gm compile mode... static
checking --with-gm value... simple ok (unspecified)
checking --with-gm-libdir value... simple ok (unspecified)
checking gm.h usability... no
checking gm.h presence... no
checking for gm.h... no
checking if MCA component btl:gm can compile... no

--- MCA component btl:mx (m4 configuration macro)
checking for MCA component btl:mx compile mode... static
checking --with-mx value... simple ok (unspecified)
checking --with-mx-libdir value... simple ok (unspecified)
checking myriexpress.h usability... no
checking myriexpress.h presence... no
checking for myriexpress.h... no
checking if MCA component btl:mx can compile... no

--- MCA component btl:ofud (m4 configuration macro)
checking for MCA component btl:ofud compile mode... static
checking --with-openib value... simple ok (unspecified)
checking --with-openib-libdir value... simple ok (unspecified)
checking for fcntl.h... (cached) yes
checking sys/poll.h usability... yes
checking sys/poll.h presence... yes
checking for sys/poll.h... yes
checking infiniband/verbs.h usability... no
checking infiniband/verbs.h presence... no
checking for infiniband/verbs.h... no
checking if ConnectX XRC support is enabled... no
checking if OpenFabrics RDMACM support is enabled... no
checking if OpenFabrics IBCM support is enabled... no
checking if MCA component btl:ofud can compile... no

--- MCA component btl:openib (m4 configuration macro)
checking for MCA component btl:openib compile mode... static
checking --with-openib value... simple ok (unspecified)
checking --with-openib-libdir value... simple ok (unspecified)
checking for fcntl.h... (cached) yes
checking for sys/poll.h... (cached) yes
checking infiniband/verbs.h usability... no
checking infiniband/verbs.h presence... no
checking for infiniband/verbs.h... no
checking if ConnectX XRC support is enabled... no
checking if OpenFabrics RDMACM support is enabled... no
checking if OpenFabrics IBCM support is enabled... no
checking for thread support (needed for ibcm/rdmacm)... posix
checking if MCA component btl:openib can compile... no

--- MCA component btl:portals (m4 configuration macro)
checking for MCA component btl:portals compile mode... static
checking --with-portals value... simple ok (unspecified)
checking for Portals configuration... utcp
checking portals3.h usability... no
checking portals3.h presence... no
checking for portals3.h... no
checking if MCA component btl:portals can compile... no

--- MCA component btl:tcp (m4 configuration macro)
checking for MCA component btl:tcp compile mode... static
checking for struct sockaddr_in... (cached) yes
checking if MCA component btl:tcp can compile... yes

--- MCA component btl:udapl (m4 configuration macro)
checking for MCA component btl:udapl compile mode... static
checking --with-udapl value... simple ok (unspecified)
checking --with-udapl-libdir value... simple ok (unspecified)
configure: WARNING: On Linux and --with-udapl was not specified
configure: WARNING: Not building the udapl BTL
checking if MCA component btl:udapl can compile... no

+++ Configuring MCA framework coll
checking for no configure components in framework coll... basic, hierarch, inter, self, sm, sync, tuned
checking for m4 configure components in framework coll... 

--- MCA component coll:basic (no configuration)
checking for MCA component coll:basic compile mode... static
checking if MCA component coll:basic can compile... yes

--- MCA component coll:hierarch (no configuration)
checking for MCA component coll:hierarch compile mode... static
checking if MCA component coll:hierarch can compile... yes

--- MCA component coll:inter (no configuration)
checking for MCA component coll:inter compile mode... static
checking if MCA component coll:inter can compile... yes

--- MCA component coll:self (no configuration)
checking for MCA component coll:self compile mode... static
checking if MCA component coll:self can compile... yes

--- MCA component coll:sm (no configuration)
checking for MCA component coll:sm compile mode... static
checking if MCA component coll:sm can compile... yes

--- MCA component coll:sync (no configuration)
checking for MCA component coll:sync compile mode... static
checking if MCA component coll:sync can compile... yes

--- MCA component coll:tuned (no configuration)
checking for MCA component coll:tuned compile mode... static
checking if MCA component coll:tuned can compile... yes

+++ Configuring MCA framework common
checking for no configure components in framework common... sm
checking for m4 configure components in framework common... mx, portals

--- MCA component common:sm (no configuration)
checking for MCA component common:sm compile mode... static
checking if MCA component common:sm can compile... yes

--- MCA component common:mx (m4 configuration macro)
checking for MCA component common:mx compile mode... static
checking --with-mx value... simple ok (unspecified)
checking --with-mx-libdir value... simple ok (unspecified)
checking myriexpress.h usability... no
checking myriexpress.h presence... no
checking for myriexpress.h... no
checking if MCA component common:mx can compile... no

--- MCA component common:portals (m4 configuration macro)
checking for MCA component common:portals compile mode... static
checking --with-portals value... simple ok (unspecified)
checking for Portals configuration... utcp
checking for portals3.h... (cached) no
checking if MCA component common:portals can compile... no

+++ Configuring MCA framework crcp
checking for no configure components in framework crcp... 
checking for m4 configure components in framework crcp... bkmrk

--- MCA component crcp:bkmrk (m4 configuration macro)
checking for MCA component crcp:bkmrk compile mode... static
checking if MCA component crcp:bkmrk can compile... no

+++ Configuring MCA framework dpm
checking for no configure components in framework dpm... orte
checking for m4 configure components in framework dpm... 

--- MCA component dpm:orte (no configuration)
checking for MCA component dpm:orte compile mode... static
checking if MCA component dpm:orte can compile... yes

+++ Configuring MCA framework io
checking for no configure components in framework io... 
checking for m4 configure components in framework io... romio

--- MCA component io:romio (m4 configuration macro)
checking for MCA component io:romio compile mode... static
checking if want ROMIO component... yes
checking if MPI profiling is enabled... yes

*** Configuring ROMIO distribution
configure: OMPI configuring in ompi/mca/io/romio/romio
configure: running /bin/sh './configure'  CFLAGS="-O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread" CPPFLAGS=" " FFLAGS="" LDFLAGS=" " --disable-shared --enable-static  --prefix=/opt/intelsoft/openmpi/openmpi-1.3.2 --with-mpi=open_mpi --disable-aio --cache-file=/dev/null --srcdir=.
Configuring with args CFLAGS=-O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread CPPFLAGS=  FFLAGS= LDFLAGS=  --disable-shared --enable-static --prefix=/opt/intelsoft/openmpi/openmpi-1.3.2 --with-mpi=open_mpi --disable-aio --cache-file=/dev/null --srcdir=.
checking for Open MPI support files... in Open MPI source tree -- good
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking for architecture... LINUX
configure: WARNING: Unknown architecture ... proceeding anyway
ROMIO home directory is /usr/local/src/openmpi-1.3.2/ompi/mca/io/romio/romio
checking for ranlib... ranlib
checking for gcc... icc
checking for C compiler default output file name... a.out
checking whether the C compiler works... yes
checking whether we are cross compiling... no
checking for suffix of executables... 
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether icc accepts -g... yes
checking for icc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of icc... gcc3
checking how to run the C preprocessor... icc -E
checking for memalign... yes
checking how to run the C preprocessor... icc -E
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for ANSI C header files... yes
checking for sys/types.h... yes
checking for sys/stat.h... yes
checking for stdlib.h... yes
checking for string.h... yes
checking for memory.h... yes
checking for strings.h... yes
checking for inttypes.h... yes
checking for stdint.h... yes
checking for unistd.h... yes
checking for unistd.h... (cached) yes
checking fcntl.h usability... yes
checking fcntl.h presence... yes
checking for fcntl.h... yes
checking malloc.h usability... yes
checking malloc.h presence... yes
checking for malloc.h... yes
checking stddef.h usability... yes
checking stddef.h presence... yes
checking for stddef.h... yes
checking size of int... 4
checking size of void *... 8
checking for int large enough for pointers... no
checking size of long long... 8
checking whether struct flock compatible with MPI_Offset... yes
checking for pvfs2-config... notfound
checking configured file systems... testfs ufs nfs
configure: WARNING: File locks may not work with NFS.  See the Installation and
users manual for instructions on testing and if necessary fixing this
checking sys/vfs.h usability... yes
checking sys/vfs.h presence... yes
checking for sys/vfs.h... yes
checking sys/param.h usability... yes
checking sys/param.h presence... yes
checking for sys/param.h... yes
checking sys/mount.h usability... yes
checking sys/mount.h presence... yes
checking for sys/mount.h... yes
checking sys/statvfs.h usability... yes
checking sys/statvfs.h presence... yes
checking for sys/statvfs.h... yes
checking whether struct statfs properly defined... yes
checking for f_fstypename member of statfs structure... no
checking for sys/stat.h... (cached) yes
checking for sys/types.h... (cached) yes
checking for unistd.h... (cached) yes
checking for stat... yes
checking for st_fstype member of stat structure... no
checking for sys/types.h... (cached) yes
checking for sys/statvfs.h... (cached) yes
checking for sys/vfs.h... (cached) yes
checking for statvfs... yes
checking for f_basetype member of statvfs structure... no
checking for unistd.h... (cached) yes
checking for large file defines... yes
checking whether off64_t is an scalar type... yes
checking for strerror... yes
checking for doctext... no
checking for strdup... yes
checking whether strdup needs a declaration... no
checking for snprintf... yes
checking whether snprintf needs a declaration... no
checking for lstat... yes
checking whether lstat needs a declaration... yes
checking for readlink... yes
checking whether readlink needs a declaration... no
checking for fsync... yes
checking whether fsync needs a declaration... no
checking for ftruncate... yes
checking whether ftruncate needs a declaration... no
checking for unistd.h... (cached) yes
checking for large file defines... yes
setting SYSDEP_INC to 
checking for C/C++ restrict keyword... __restrict
checking whether __attribute__ allowed... yes
checking whether __attribute__((format)) allowed... yes
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking for a sed that does not truncate output... /bin/sed
checking for fgrep... /bin/grep -F
checking for ld used by icc... /usr/bin/ld
checking if the linker (/usr/bin/ld) is GNU ld... yes
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
checking the name lister (/usr/bin/nm -B) interface... BSD nm
checking whether ln -s works... yes
checking the maximum length of command line arguments... 98304
checking whether the shell understands some XSI constructs... yes
checking whether the shell understands "+="... no
checking for /usr/bin/ld option to reload object files... -r
checking for objdump... objdump
checking how to recognize dependent libraries... pass_all
checking for ar... ar
checking for strip... strip
checking for ranlib... (cached) ranlib
checking command to parse /usr/bin/nm -B output from icc object... ok
checking for dlfcn.h... yes
checking whether we are using the GNU Fortran 77 compiler... no
checking whether : accepts -g... no
checking for objdir... .libs
checking if icc supports -fno-rtti -fno-exceptions... yes
checking for icc option to produce PIC... -fPIC -DPIC
checking if icc PIC flag -fPIC -DPIC works... yes
checking if icc static flag -static works... yes
checking if icc supports -c -o file.o... yes
checking if icc supports -c -o file.o... (cached) yes
checking whether the icc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking whether stripping libraries is possible... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking for : option to produce PIC... 
checking if : static flag  works... no
checking if : supports -c -o file.o... no
checking if : supports -c -o file.o... (cached) no
checking whether the : linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
setting CC to icc
setting F77 to :
setting TEST_CC to mpicc
setting TEST_F77 to mpif77
setting CFLAGS to -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -D_LARGEFILE64_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_ROMIOCONF_H -D_LARGEFILE64_SOURCE -D_FILE_OFFSET_BITS=64 -DHAVE_ROMIOCONF_H
setting USER_CFLAGS to 
setting USER_FFLAGS to 
configure: creating ./config.status
config.status: creating Makefile
config.status: creating localdefs
config.status: creating adio/Makefile
config.status: creating adio/ad_bgl/Makefile
config.status: creating adio/ad_bglockless/Makefile
config.status: creating adio/ad_gridftp/Makefile
config.status: creating adio/ad_lustre/Makefile
config.status: creating adio/ad_nfs/Makefile
config.status: creating adio/ad_ntfs/Makefile
config.status: creating adio/ad_panfs/Makefile
config.status: creating adio/ad_pfs/Makefile
config.status: creating adio/ad_pvfs/Makefile
config.status: creating adio/ad_pvfs2/Makefile
config.status: creating adio/ad_sfs/Makefile
config.status: creating adio/ad_testfs/Makefile
config.status: creating adio/ad_ufs/Makefile
config.status: creating adio/ad_xfs/Makefile
config.status: creating adio/common/Makefile
config.status: creating adio/include/Makefile
config.status: creating doc/Makefile
config.status: creating include/mpio.h
config.status: creating include/mpiof.h
config.status: creating include/Makefile
config.status: creating mpi-io/Makefile
config.status: creating test/Makefile
config.status: creating test/misc.c
config.status: creating test/large_file.c
config.status: creating test/fmisc.f
config.status: creating test/fcoll_test.f
config.status: creating test/pfcoll_test.f
config.status: creating test/fperf.f
config.status: creating test/runtests
config.status: creating util/romioinstall
config.status: creating mpi-io/glue/openmpi/Makefile
config.status: creating util/Makefile
config.status: creating adio/include/romioconf.h
config.status: executing depfiles commands
config.status: executing libtool commands
config.status: executing default-1 commands
configure: /bin/sh './configure' succeeded for ompi/mca/io/romio/romio
ROMIO distribution configured successfully
checking if MCA component io:romio can compile... yes

+++ Configuring MCA framework mpool
checking for no configure components in framework mpool... fake, rdma, sm
checking for m4 configure components in framework mpool... 

--- MCA component mpool:fake (no configuration)
checking for MCA component mpool:fake compile mode... static
checking if MCA component mpool:fake can compile... yes

--- MCA component mpool:rdma (no configuration)
checking for MCA component mpool:rdma compile mode... static
checking if MCA component mpool:rdma can compile... yes

--- MCA component mpool:sm (no configuration)
checking for MCA component mpool:sm compile mode... static
checking if MCA component mpool:sm can compile... yes

+++ Configuring MCA framework mtl
checking for no configure components in framework mtl... 
checking for m4 configure components in framework mtl... mx, portals, psm

--- MCA component mtl:mx (m4 configuration macro)
checking for MCA component mtl:mx compile mode... static
checking --with-mx value... simple ok (unspecified)
checking --with-mx-libdir value... simple ok (unspecified)
checking myriexpress.h usability... no
checking myriexpress.h presence... no
checking for myriexpress.h... no
checking if MCA component mtl:mx can compile... no

--- MCA component mtl:portals (m4 configuration macro)
checking for MCA component mtl:portals compile mode... static
checking --with-portals value... simple ok (unspecified)
checking for Portals configuration... utcp
checking for portals3.h... (cached) no
checking if MCA component mtl:portals can compile... no

--- MCA component mtl:psm (m4 configuration macro)
checking for MCA component mtl:psm compile mode... static
checking --with-psm value... simple ok (unspecified)
checking --with-psm-libdir value... simple ok (unspecified)
checking psm.h usability... no
checking psm.h presence... no
checking for psm.h... no
checking if MCA component mtl:psm can compile... no

+++ Configuring MCA framework osc
checking for no configure components in framework osc... pt2pt, rdma
checking for m4 configure components in framework osc... 

--- MCA component osc:pt2pt (no configuration)
checking for MCA component osc:pt2pt compile mode... static
checking if MCA component osc:pt2pt can compile... yes

--- MCA component osc:rdma (no configuration)
checking for MCA component osc:rdma compile mode... static
checking if MCA component osc:rdma can compile... yes

+++ Configuring MCA framework pml
checking for no configure components in framework pml... cm, csum, ob1
checking for m4 configure components in framework pml... crcpw, v

--- MCA component pml:cm (no configuration)
checking for MCA component pml:cm compile mode... static
checking if MCA component pml:cm can compile... yes

--- MCA component pml:csum (no configuration)
checking for MCA component pml:csum compile mode... static
checking if MCA component pml:csum can compile... yes

--- MCA component pml:ob1 (no configuration)
checking for MCA component pml:ob1 compile mode... static
checking if MCA component pml:ob1 can compile... yes

--- MCA component pml:crcpw (m4 configuration macro)
checking for MCA component pml:crcpw compile mode... static
checking if MCA component pml:crcpw can compile... no

--- MCA component pml:v (m4 configuration macro)
checking for MCA component pml:v compile mode... static

+++ Configuring MCA framework vprotocol
checking for no configure components in framework vprotocol... pessimist
checking for m4 configure components in framework vprotocol... 

--- MCA component vprotocol:pessimist (no configuration)
checking for MCA component vprotocol:pessimist compile mode... static
checking if MCA component vprotocol:pessimist can compile... yes
checking if MCA component pml:v can compile... yes

+++ Configuring MCA framework pubsub
checking for no configure components in framework pubsub... orte
checking for m4 configure components in framework pubsub... 

--- MCA component pubsub:orte (no configuration)
checking for MCA component pubsub:orte compile mode... static
checking if MCA component pubsub:orte can compile... yes

+++ Configuring MCA framework rcache
checking for no configure components in framework rcache... vma
checking for m4 configure components in framework rcache... 

--- MCA component rcache:vma (no configuration)
checking for MCA component rcache:vma compile mode... static
checking if MCA component rcache:vma can compile... yes

+++ Configuring MCA framework topo
checking for no configure components in framework topo... unity
checking for m4 configure components in framework topo... 

--- MCA component topo:unity (no configuration)
checking for MCA component topo:unity compile mode... static
checking if MCA component topo:unity can compile... yes

============================================================================
== Symbol Visibility Feature
============================================================================
checking if icc supports -fvisibility... yes
checking enable symbol visibility... yes
configure: WARNING:  -fvisibility=hidden has been added to CFLAGS

============================================================================
== Contributed software setup
============================================================================

*** Configuring contributed software packages
checking which contributed software packages should be disabled... 

--- vt (m4 configuration macro)
configure: OMPI configuring in ompi/contrib/vt/vt
configure: running /bin/sh './configure' --disable-option-checking 'MPICC=icc' --with-openmpi '--with-mpi-inc-dir=/usr/local/src/openmpi-1.3.2/ompi/include' --with-mpi-status-size=5 --disable-config-titles --disable-config-summary '--disable-shared' '--enable-static' '--prefix=/opt/intelsoft/openmpi/openmpi-1.3.2' 'CC=icc' 'CXX=icpc' 'F77=ifort' 'FC=ifort'  --cache-file=/dev/null --srcdir=.
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
configure: builddir: /usr/local/src/openmpi-1.3.2/ompi/contrib/vt/vt
configure: srcdir: /usr/local/src/openmpi-1.3.2/ompi/contrib/vt/vt
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking for gcc... icc
checking for C compiler default output file name... a.out
checking whether the C compiler works... yes
checking whether we are cross compiling... no
checking for suffix of executables... 
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether icc accepts -g... yes
checking for icc option to accept ISO C89... none needed
checking for style of include used by make... GNU
checking dependency style of icc... gcc3
checking whether icc and cc understand -c and -o together... yes
checking whether we are using the GNU C++ compiler... yes
checking whether icpc accepts -g... yes
checking dependency style of icpc... gcc3
checking how to run the C preprocessor... icc -E
checking how to run the C++ preprocessor... icpc -E
checking whether we are using the GNU Fortran 77 compiler... no
checking whether ifort accepts -g... yes
checking whether we are using the GNU Fortran compiler... no
checking whether ifort accepts -g... yes
checking for ar... ar
checking for ranlib... ranlib
checking dependency style of icc... gcc3
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for ANSI C header files... yes
checking for sys/types.h... yes
checking for sys/stat.h... yes
checking for stdlib.h... yes
checking for string.h... yes
checking for memory.h... yes
checking for strings.h... yes
checking for inttypes.h... yes
checking for stdint.h... yes
checking for unistd.h... yes
checking for stdint.h... (cached) yes
checking for inttypes.h... (cached) yes
checking fnmatch.h usability... yes
checking fnmatch.h presence... yes
checking for fnmatch.h... yes
checking sys/param.h usability... yes
checking sys/param.h presence... yes
checking for sys/param.h... yes
checking for size_t... yes
checking size of void*... 8
checking size of int... 4
checking size of long... 8
checking size of mode_t... 4
checking whether va_copy is declared... yes
checking whether __va_copy is declared... yes
checking for asprintf... yes
checking for snprintf... yes
checking for vasprintf... yes
checking for vsnprintf... yes
checking for strdup... yes
checking zlib.h usability... yes
checking zlib.h presence... yes
checking for zlib.h... yes
checking whether linking with -lz works... yes
configure: configuring in extlib/otf (/usr/local/src/openmpi-1.3.2/ompi/contrib/vt/vt/extlib/otf)
configure: running /bin/sh ./configure  --with-zlib-lib=-lz --prefix="/opt/intelsoft/openmpi/openmpi-1.3.2" --exec-prefix="/opt/intelsoft/openmpi/openmpi-1.3.2" --bindir="${exec_prefix}/bin" --libdir="${exec_prefix}/lib" --includedir="${prefix}/include" --docdir="${datarootdir}/doc/otf"  --cache-file="/dev/null" --srcdir="."
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking target system type... x86_64-unknown-linux-gnu
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking for C++ compiler default output file name... a.out
checking whether the C++ compiler works... yes
checking whether we are cross compiling... no
checking for suffix of executables... 
checking for suffix of object files... o
checking whether we are using the GNU C++ compiler... yes
checking whether icpc accepts -g... yes
checking for style of include used by make... GNU
checking dependency style of icpc... gcc3
checking for gcc... icc
checking whether we are using the GNU C compiler... yes
checking whether icc accepts -g... yes
checking for icc option to accept ISO C89... none needed
checking dependency style of icc... gcc3
checking for a sed that does not truncate output... /bin/sed
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for fgrep... /bin/grep -F
checking for ld used by icc... /usr/bin/ld
checking if the linker (/usr/bin/ld) is GNU ld... yes
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
checking the name lister (/usr/bin/nm -B) interface... BSD nm
checking whether ln -s works... yes
checking the maximum length of command line arguments... 98304
checking whether the shell understands some XSI constructs... yes
checking whether the shell understands "+="... no
checking for /usr/bin/ld option to reload object files... -r
checking for objdump... objdump
checking how to recognize dependent libraries... pass_all
checking for ar... ar
checking for strip... strip
checking for ranlib... ranlib
checking command to parse /usr/bin/nm -B output from icc object... ok
checking how to run the C preprocessor... icc -E
checking for ANSI C header files... yes
checking for sys/types.h... yes
checking for sys/stat.h... yes
checking for stdlib.h... yes
checking for string.h... yes
checking for memory.h... yes
checking for strings.h... yes
checking for inttypes.h... yes
checking for stdint.h... yes
checking for unistd.h... yes
checking for dlfcn.h... yes
checking whether we are using the GNU C++ compiler... (cached) yes
checking whether icpc accepts -g... (cached) yes
checking dependency style of icpc... (cached) gcc3
checking how to run the C++ preprocessor... icpc -E
checking for objdir... .libs
checking if icc supports -fno-rtti -fno-exceptions... yes
checking for icc option to produce PIC... -fPIC -DPIC
checking if icc PIC flag -fPIC -DPIC works... yes
checking if icc static flag -static works... yes
checking if icc supports -c -o file.o... yes
checking if icc supports -c -o file.o... (cached) yes
checking whether the icc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking whether stripping libraries is possible... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking for ld used by icpc... /usr/bin/ld -m elf_x86_64
checking if the linker (/usr/bin/ld -m elf_x86_64) is GNU ld... yes
checking whether the icpc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking for icpc option to produce PIC... -fPIC -DPIC
checking if icpc PIC flag -fPIC -DPIC works... yes
checking if icpc static flag -static works... yes
checking if icpc supports -c -o file.o... yes
checking if icpc supports -c -o file.o... (cached) yes
checking whether the icpc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking vtf3.h usability... no
checking vtf3.h presence... no
checking for vtf3.h... no
configure: error: no vtf3.h found; check path for VTF3 package first...
checking zlib.h usability... yes
checking zlib.h presence... yes
checking for zlib.h... yes
checking for ANSI C header files... (cached) yes
checking stddef.h usability... yes
checking stddef.h presence... yes
checking for stddef.h... yes
checking for stdlib.h... (cached) yes
checking for string.h... (cached) yes
checking sys/time.h usability... yes
checking sys/time.h presence... yes
checking for sys/time.h... yes
checking for unistd.h... (cached) yes
checking for stdint.h... (cached) yes
checking for inttypes.h... (cached) yes
checking whether va_copy is declared... yes
checking whether __va_copy is declared... yes
checking for asprintf... yes
checking for snprintf... yes
checking for vasprintf... yes
checking for vsnprintf... yes
checking for strdup... yes
checking for fseeko... yes
checking for ftello... yes
checking for size_t... yes
checking size of long... 8
configure: creating ./config.status
config.status: creating Makefile
config.status: creating otflib/Makefile
config.status: creating otflib/OTF_inttypes_unix.h
config.status: creating otflib_py/Makefile
config.status: creating tools/Makefile
config.status: creating tools/otfaux/Makefile
config.status: creating tools/otfcompress/Makefile
config.status: creating tools/otfconfig/Makefile
config.status: creating tools/otfdump/Makefile
config.status: creating tools/otfmerge/Makefile
config.status: creating tools/otf2vtf/Makefile
config.status: creating tools/vtf2otf/Makefile
config.status: creating docu/Makefile
config.status: creating config.h
config.status: executing depfiles commands
config.status: executing libtool commands
checking for platform... linux
configure: selected timer: TIMER_CYCLE_COUNTER
checking for compiler instrumentation... intel
checking bfd.h usability... yes
checking bfd.h presence... yes
checking for bfd.h... yes
checking whether linking with -lbfd works... yes
checking libiberty.h usability... yes
checking libiberty.h presence... yes
checking for libiberty.h... yes
checking whether linking with -liberty works... yes
checking demangle.h usability... no
checking demangle.h presence... no
checking for demangle.h... no
checking BPatch.h usability... no
checking BPatch.h presence... no
checking for BPatch.h... no
configure: error: no BPatch.h found; check path for Dyninst package first...
checking for mpicc... icc
checking for the value of MPI_STATUS_SIZE... skipped (--with-mpi-status-size=5)
checking for MPI_File_open... no
checking for OpenMP flag of C compiler... -openmp
checking omp.h usability... yes
checking omp.h presence... yes
checking for omp.h... yes
checking malloc.h usability... yes
checking malloc.h presence... yes
checking for malloc.h... yes
checking for __malloc_hook... yes
checking for __realloc_hook... yes
checking for __free_hook... yes
checking dlfcn.h usability... yes
checking dlfcn.h presence... yes
checking for dlfcn.h... yes
checking whether linking with -ldl works... yes
checking whether RTLD_NEXT is declared... no
checking whether we need to define _GNU_SOURCE to get RTLD_NEXT... yes
checking for creat64... yes
checking for fopen64... yes
checking for fseeko... yes
checking for fseeko64... yes
checking for lseek64... yes
checking for fsetpos64... yes
checking for open64... yes
checking for pread64... yes
checking for pwrite64... yes
checking papi.h usability... no
checking papi.h presence... no
checking for papi.h... no
configure: error: no papi.h found; check path for PAPI package first...
configure: creating ./config.status
config.status: creating Makefile
config.status: creating util/Makefile
config.status: creating extlib/Makefile
config.status: creating vtlib/Makefile
config.status: creating tools/Makefile
config.status: creating tools/compwrap/Makefile
config.status: creating tools/compwrap/vtcc-wrapper-data.txt
config.status: creating tools/compwrap/vtcxx-wrapper-data.txt
config.status: creating tools/compwrap/vtf77-wrapper-data.txt
config.status: creating tools/compwrap/vtf90-wrapper-data.txt
config.status: creating tools/opari/Makefile
config.status: creating tools/opari/tool/Makefile
config.status: creating tools/opari/doc/Makefile
config.status: creating tools/vtdyn/Makefile
config.status: creating tools/vtdyn/dynattlib/Makefile
config.status: creating tools/vtfilter/Makefile
config.status: creating tools/vtunify/Makefile
config.status: creating doc/Makefile
config.status: creating config.h
config.status: executing depfiles commands
configure: /bin/sh './configure' succeeded for ompi/contrib/vt/vt
checking if contributed component vt can compile... yes

============================================================================
== Final top-level OMPI configuration
============================================================================

*** Libevent 3rd party event handler
checking for ANSI C header files... (cached) yes
checking for fcntl.h... (cached) yes
checking for stdarg.h... (cached) yes
checking for inttypes.h... (cached) yes
checking for stdint.h... (cached) yes
checking for poll.h... (cached) yes
checking signal.h usability... yes
checking signal.h presence... yes
checking for signal.h... yes
checking for unistd.h... (cached) yes
checking sys/epoll.h usability... yes
checking sys/epoll.h presence... yes
checking for sys/epoll.h... yes
checking for sys/time.h... (cached) yes
checking for sys/queue.h... (cached) yes
checking sys/event.h usability... no
checking sys/event.h presence... no
checking for sys/event.h... no
checking for sys/ioctl.h... (cached) yes
checking sys/devpoll.h usability... no
checking sys/devpoll.h presence... no
checking for sys/devpoll.h... no
checking for TAILQ_FOREACH in sys/queue.h... no
checking for timeradd in sys/time.h... yes
checking whether time.h and sys/time.h may both be included... yes
checking for gettimeofday... yes
checking for vasprintf... (cached) yes
checking for fcntl... yes
checking for F_SETFD in fcntl.h... yes
checking for select... yes
checking for poll... yes
checking for epoll_ctl... yes
checking for working epoll library interface... yes
checking for port_create... no
checking for pid_t... yes
checking for size_t... yes
checking for u_int64_t... yes
checking for u_int32_t... yes
checking for u_int16_t... yes
checking for u_int8_t... yes

*** Libtool configuration
checking for a sed that does not truncate output... /bin/sed
checking for ld used by icc... /usr/bin/ld
checking if the linker (/usr/bin/ld) is GNU ld... yes
checking the maximum length of command line arguments... 98304
checking whether the shell understands some XSI constructs... yes
checking whether the shell understands "+="... no
checking for /usr/bin/ld option to reload object files... -r
checking how to recognize dependent libraries... pass_all
checking for ar... ar
checking for strip... strip
checking for ranlib... ranlib
checking command to parse /usr/bin/nm -B output from icc object... ok
checking for dlfcn.h... (cached) yes
checking whether we are using the GNU C++ compiler... (cached) yes
checking whether icpc accepts -g... (cached) yes
checking dependency style of icpc... (cached) gcc3
checking how to run the C++ preprocessor... icpc -E
checking whether we are using the GNU Fortran 77 compiler... (cached) no
checking whether ifort accepts -g... (cached) yes
checking whether we are using the GNU Fortran compiler... (cached) no
checking whether ifort accepts -g... (cached) yes
checking for objdir... .libs
checking if icc supports -fno-rtti -fno-exceptions... yes
checking for icc option to produce PIC... -fPIC -DPIC
checking if icc PIC flag -fPIC -DPIC works... yes
checking if icc static flag -static works... yes
checking if icc supports -c -o file.o... yes
checking if icc supports -c -o file.o... (cached) yes
checking whether the icc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking for shl_load... no
checking for shl_load in -ldld... no
checking for dlopen... yes
checking whether a program can dlopen itself... no
checking whether stripping libraries is possible... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking for ld used by icpc... /usr/bin/ld -m elf_x86_64
checking if the linker (/usr/bin/ld -m elf_x86_64) is GNU ld... yes
checking whether the icpc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking for icpc option to produce PIC... -fPIC -DPIC
checking if icpc PIC flag -fPIC -DPIC works... yes
checking if icpc static flag -static works... yes
checking if icpc supports -c -o file.o... yes
checking if icpc supports -c -o file.o... (cached) yes
checking whether the icpc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking for ifort option to produce PIC... -fPIC
checking if ifort PIC flag -fPIC works... yes
checking if ifort static flag -static works... yes
checking if ifort supports -c -o file.o... yes
checking if ifort supports -c -o file.o... (cached) yes
checking whether the ifort linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking for ifort option to produce PIC... -fPIC
checking if ifort PIC flag -fPIC works... yes
checking if ifort static flag -static works... yes
checking if ifort supports -c -o file.o... yes
checking if ifort supports -c -o file.o... (cached) yes
checking whether the ifort linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate

*** GNU libltdl setup
configure: OMPI configuring in opal/libltdl
configure: running /bin/sh './configure'  '--disable-shared' '--enable-static' '--prefix=/opt/intelsoft/openmpi/openmpi-1.3.2' 'CC=icc' 'CXX=icpc' 'F77=ifort' 'FC=ifort' --enable-ltdl-convenience --disable-ltdl-install --disable-shared --enable-static --cache-file=/dev/null --srcdir=.
configure: WARNING: unrecognized options: --enable-ltdl-convenience
checking for a BSD-compatible install... /usr/bin/install -c
checking whether build environment is sane... yes
checking for a thread-safe mkdir -p... /bin/mkdir -p
checking for gawk... gawk
checking whether make sets $(MAKE)... yes
checking build system type... x86_64-unknown-linux-gnu
checking host system type... x86_64-unknown-linux-gnu
checking for style of include used by make... GNU
checking for gcc... icc
checking for C compiler default output file name... a.out
checking whether the C compiler works... yes
checking whether we are cross compiling... no
checking for suffix of executables... 
checking for suffix of object files... o
checking whether we are using the GNU C compiler... yes
checking whether icc accepts -g... yes
checking for icc option to accept ISO C89... none needed
checking dependency style of icc... gcc3
checking for a sed that does not truncate output... /bin/sed
checking for grep that handles long lines and -e... /bin/grep
checking for egrep... /bin/grep -E
checking for fgrep... /bin/grep -F
checking for ld used by icc... /usr/bin/ld
checking if the linker (/usr/bin/ld) is GNU ld... yes
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
checking the name lister (/usr/bin/nm -B) interface... BSD nm
checking whether ln -s works... yes
checking the maximum length of command line arguments... 98304
checking whether the shell understands some XSI constructs... yes
checking whether the shell understands "+="... no
checking for /usr/bin/ld option to reload object files... -r
checking for objdump... objdump
checking how to recognize dependent libraries... pass_all
checking for ar... ar
checking for strip... strip
checking for ranlib... ranlib
checking command to parse /usr/bin/nm -B output from icc object... ok
checking how to run the C preprocessor... icc -E
checking for ANSI C header files... yes
checking for sys/types.h... yes
checking for sys/stat.h... yes
checking for stdlib.h... yes
checking for string.h... yes
checking for memory.h... yes
checking for strings.h... yes
checking for inttypes.h... yes
checking for stdint.h... yes
checking for unistd.h... yes
checking for dlfcn.h... yes
checking for objdir... .libs
checking if icc supports -fno-rtti -fno-exceptions... yes
checking for icc option to produce PIC... -fPIC -DPIC
checking if icc PIC flag -fPIC -DPIC works... yes
checking if icc static flag -static works... yes
checking if icc supports -c -o file.o... yes
checking if icc supports -c -o file.o... (cached) yes
checking whether the icc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking for shl_load... no
checking for shl_load in -ldld... no
checking for dlopen... yes
checking whether a program can dlopen itself... yes
checking whether a statically linked program can dlopen itself... no
checking whether stripping libraries is possible... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... no
checking whether to build static libraries... yes
checking which extension is used for runtime loadable modules... .so
checking which variable specifies run-time module search path... LD_LIBRARY_PATH
checking for the default library search path... /lib /usr/lib /usr/lib/mysql /usr/lib/mysql /usr/lib/qt-3.3/lib /usr/lib64/qt-3.3/lib /usr/X11R6/lib /usr/X11R6/lib64 /usr/ofed/lib64 
checking for library containing dlopen... none required
checking for dlerror... yes
checking for shl_load... (cached) no
checking for shl_load in -ldld... (cached) no
checking for dld_link in -ldld... no
checking for _ prefix in compiled symbols... no
checking whether deplibs are loaded by dlopen... yes
checking for argz.h... yes
checking for error_t... yes
checking for argz_add... yes
checking for argz_append... yes
checking for argz_count... yes
checking for argz_create_sep... yes
checking for argz_insert... yes
checking for argz_next... yes
checking for argz_stringify... yes
checking if argz actually works... yes
checking whether libtool supports -dlopen/-dlpreopen... yes
checking for unistd.h... (cached) yes
checking for dl.h... no
checking for sys/dl.h... no
checking for dld.h... no
checking for mach-o/dyld.h... no
checking for dirent.h... yes
checking for closedir... yes
checking for opendir... yes
checking for readdir... yes
checking for strlcat... no
checking for strlcpy... no
configure: creating ./config.status
config.status: creating Makefile
config.status: creating config.h
config.status: executing depfiles commands
config.status: executing libtool commands
configure: WARNING: unrecognized options: --enable-ltdl-convenience
configure: /bin/sh './configure' succeeded for opal/libltdl
checking for libtool-supplied linker flags...  -Wl,--export-dynamic -lnsl -lutil

*** Compiler flags
checking which of CFLAGS are ok for TotalView modules...  -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -fvisibility=hidden
checking extra CFLAGS for TotalView modules... -g

*** Wrapper compiler flags
checking for OPAL CPPFLAGS...  
checking for OPAL CFLAGS... -pthread 
checking for OPAL CXXFLAGS... -pthread 
checking for OPAL LDFLAGS...   
checking for OPAL LIBS... -lnuma -ldl   -Wl,--export-dynamic -lnsl -lutil 
checking for OPAL extra include dirs... 
checking for ORTE CPPFLAGS...  
checking for ORTE CFLAGS... -pthread 
checking for ORTE CXXFLAGS... -pthread 
checking for ORTE LDFLAGS...    
checking for ORTE LIBS...  -lnuma -ldl   -Wl,--export-dynamic -lnsl -lutil 
checking for ORTE extra include dirs... 
checking for OMPI CPPFLAGS...  
checking for OMPI CFLAGS... -pthread 
checking for OMPI CXXFLAGS... -pthread 
checking for OMPI FFLAGS...  
checking for OMPI FCFLAGS...  
checking for OMPI LDFLAGS...     
checking for OMPI LIBS...   -lnuma -ldl   -Wl,--export-dynamic -lnsl -lutil 
checking for OMPI extra include dirs... 

*** Final output
configure: creating ./config.status
config.status: creating ompi/include/ompi/version.h
config.status: creating orte/include/orte/version.h
config.status: creating opal/include/opal/version.h
config.status: creating ompi/tools/wrappers/ompi_wrapper_script
config.status: creating opal/mca/installdirs/config/install_dirs.h
config.status: creating opal/mca/paffinity/linux/plpa/Makefile
config.status: creating opal/mca/paffinity/linux/plpa/config/Makefile
config.status: creating opal/mca/paffinity/linux/plpa/src/Makefile
config.status: creating opal/mca/paffinity/linux/plpa/src/libplpa/Makefile
config.status: creating opal/mca/paffinity/linux/plpa/src/plpa-info/Makefile
config.status: creating opal/mca/paffinity/linux/plpa/src/plpa-taskset/Makefile
config.status: creating opal/mca/backtrace/Makefile
config.status: creating opal/mca/backtrace/darwin/Makefile
config.status: creating opal/mca/backtrace/execinfo/Makefile
config.status: creating opal/mca/backtrace/none/Makefile
config.status: creating opal/mca/backtrace/printstack/Makefile
config.status: creating opal/mca/carto/Makefile
config.status: creating opal/mca/carto/auto_detect/Makefile
config.status: creating opal/mca/carto/file/Makefile
config.status: creating opal/mca/crs/Makefile
config.status: creating opal/mca/crs/blcr/Makefile
config.status: creating opal/mca/crs/none/Makefile
config.status: creating opal/mca/crs/self/Makefile
config.status: creating opal/mca/installdirs/Makefile
config.status: creating opal/mca/installdirs/config/Makefile
config.status: creating opal/mca/installdirs/env/Makefile
config.status: creating opal/mca/maffinity/Makefile
config.status: creating opal/mca/maffinity/first_use/Makefile
config.status: creating opal/mca/maffinity/libnuma/Makefile
config.status: creating opal/mca/memchecker/Makefile
config.status: creating opal/mca/memchecker/valgrind/Makefile
config.status: creating opal/mca/memcpy/Makefile
config.status: creating opal/mca/memory/Makefile
config.status: creating opal/mca/memory/malloc_solaris/Makefile
config.status: creating opal/mca/memory/ptmalloc2/Makefile
config.status: creating opal/mca/paffinity/Makefile
config.status: creating opal/mca/paffinity/darwin/Makefile
config.status: creating opal/mca/paffinity/linux/Makefile
config.status: creating opal/mca/paffinity/posix/Makefile
config.status: creating opal/mca/paffinity/solaris/Makefile
config.status: creating opal/mca/paffinity/windows/Makefile
config.status: creating opal/mca/timer/Makefile
config.status: creating opal/mca/timer/aix/Makefile
config.status: creating opal/mca/timer/altix/Makefile
config.status: creating opal/mca/timer/catamount/Makefile
config.status: creating opal/mca/timer/darwin/Makefile
config.status: creating opal/mca/timer/linux/Makefile
config.status: creating opal/mca/timer/solaris/Makefile
config.status: creating opal/mca/timer/windows/Makefile
config.status: creating orte/mca/errmgr/Makefile
config.status: creating orte/mca/errmgr/default/Makefile
config.status: creating orte/mca/ess/Makefile
config.status: creating orte/mca/ess/alps/Makefile
config.status: creating orte/mca/ess/cnos/Makefile
config.status: creating orte/mca/ess/env/Makefile
config.status: creating orte/mca/ess/hnp/Makefile
config.status: creating orte/mca/ess/lsf/Makefile
config.status: creating orte/mca/ess/portals_utcp/Makefile
config.status: creating orte/mca/ess/singleton/Makefile
config.status: creating orte/mca/ess/slurm/Makefile
config.status: creating orte/mca/ess/tool/Makefile
config.status: creating orte/mca/filem/Makefile
config.status: creating orte/mca/filem/rsh/Makefile
config.status: creating orte/mca/grpcomm/Makefile
config.status: creating orte/mca/grpcomm/bad/Makefile
config.status: creating orte/mca/grpcomm/basic/Makefile
config.status: creating orte/mca/grpcomm/cnos/Makefile
config.status: creating orte/mca/iof/Makefile
config.status: creating orte/mca/iof/hnp/Makefile
config.status: creating orte/mca/iof/orted/Makefile
config.status: creating orte/mca/iof/tool/Makefile
config.status: creating orte/mca/notifier/Makefile
config.status: creating orte/mca/notifier/syslog/Makefile
config.status: creating orte/mca/odls/Makefile
config.status: creating orte/mca/odls/default/Makefile
config.status: creating orte/mca/oob/Makefile
config.status: creating orte/mca/oob/tcp/Makefile
config.status: creating orte/mca/plm/Makefile
config.status: creating orte/mca/plm/alps/Makefile
config.status: creating orte/mca/plm/lsf/Makefile
config.status: creating orte/mca/plm/rsh/Makefile
config.status: creating orte/mca/plm/slurm/Makefile
config.status: creating orte/mca/plm/tm/Makefile
config.status: creating orte/mca/plm/xgrid/Makefile
config.status: creating orte/mca/ras/Makefile
config.status: creating orte/mca/ras/alps/Makefile
config.status: creating orte/mca/ras/gridengine/Makefile
config.status: creating orte/mca/ras/loadleveler/Makefile
config.status: creating orte/mca/ras/lsf/Makefile
config.status: creating orte/mca/ras/slurm/Makefile
config.status: creating orte/mca/ras/tm/Makefile
config.status: creating orte/mca/rmaps/Makefile
config.status: creating orte/mca/rmaps/rank_file/Makefile
config.status: creating orte/mca/rmaps/round_robin/Makefile
config.status: creating orte/mca/rmaps/seq/Makefile
config.status: creating orte/mca/rml/Makefile
config.status: creating orte/mca/rml/ftrm/Makefile
config.status: creating orte/mca/rml/oob/Makefile
config.status: creating orte/mca/routed/Makefile
config.status: creating orte/mca/routed/binomial/Makefile
config.status: creating orte/mca/routed/direct/Makefile
config.status: creating orte/mca/routed/linear/Makefile
config.status: creating orte/mca/snapc/Makefile
config.status: creating orte/mca/snapc/full/Makefile
config.status: creating ompi/mca/allocator/Makefile
config.status: creating ompi/mca/allocator/basic/Makefile
config.status: creating ompi/mca/allocator/bucket/Makefile
config.status: creating ompi/mca/bml/Makefile
config.status: creating ompi/mca/bml/r2/Makefile
config.status: creating ompi/mca/btl/Makefile
config.status: creating ompi/mca/btl/elan/Makefile
config.status: creating ompi/mca/btl/gm/Makefile
config.status: creating ompi/mca/btl/mx/Makefile
config.status: creating ompi/mca/btl/ofud/Makefile
config.status: creating ompi/mca/btl/openib/Makefile
config.status: creating ompi/mca/btl/portals/Makefile
config.status: creating ompi/mca/btl/self/Makefile
config.status: creating ompi/mca/btl/sm/Makefile
config.status: creating ompi/mca/btl/tcp/Makefile
config.status: creating ompi/mca/btl/udapl/Makefile
config.status: creating ompi/mca/coll/Makefile
config.status: creating ompi/mca/coll/basic/Makefile
config.status: creating ompi/mca/coll/hierarch/Makefile
config.status: creating ompi/mca/coll/inter/Makefile
config.status: creating ompi/mca/coll/self/Makefile
config.status: creating ompi/mca/coll/sm/Makefile
config.status: creating ompi/mca/coll/sync/Makefile
config.status: creating ompi/mca/coll/tuned/Makefile
config.status: creating ompi/mca/common/Makefile
config.status: creating ompi/mca/common/mx/Makefile
config.status: creating ompi/mca/common/portals/Makefile
config.status: creating ompi/mca/common/sm/Makefile
config.status: creating ompi/mca/crcp/Makefile
config.status: creating ompi/mca/crcp/bkmrk/Makefile
config.status: creating ompi/mca/dpm/Makefile
config.status: creating ompi/mca/dpm/orte/Makefile
config.status: creating ompi/mca/io/Makefile
config.status: creating ompi/mca/io/romio/Makefile
config.status: creating ompi/mca/mpool/Makefile
config.status: creating ompi/mca/mpool/fake/Makefile
config.status: creating ompi/mca/mpool/rdma/Makefile
config.status: creating ompi/mca/mpool/sm/Makefile
config.status: creating ompi/mca/mtl/Makefile
config.status: creating ompi/mca/mtl/mx/Makefile
config.status: creating ompi/mca/mtl/portals/Makefile
config.status: creating ompi/mca/mtl/psm/Makefile
config.status: creating ompi/mca/osc/Makefile
config.status: creating ompi/mca/osc/pt2pt/Makefile
config.status: creating ompi/mca/osc/rdma/Makefile
config.status: creating ompi/mca/pml/Makefile
config.status: creating ompi/mca/pml/cm/Makefile
config.status: creating ompi/mca/pml/crcpw/Makefile
config.status: creating ompi/mca/pml/csum/Makefile
config.status: creating ompi/mca/pml/ob1/Makefile
config.status: creating ompi/mca/pml/v/mca/vprotocol/Makefile
config.status: creating ompi/mca/pml/v/mca/vprotocol/pessimist/Makefile
config.status: creating ompi/mca/pml/v/Makefile
config.status: creating ompi/mca/pubsub/Makefile
config.status: creating ompi/mca/pubsub/orte/Makefile
config.status: creating ompi/mca/rcache/Makefile
config.status: creating ompi/mca/rcache/vma/Makefile
config.status: creating ompi/mca/topo/Makefile
config.status: creating ompi/mca/topo/unity/Makefile
config.status: creating ompi/contrib/vt/Makefile
config.status: creating ompi/contrib/vt/wrappers/Makefile
config.status: creating ompi/contrib/vt/wrappers/mpicc-vt-wrapper-data.txt
config.status: creating ompi/contrib/vt/wrappers/mpic++-vt-wrapper-data.txt
config.status: creating ompi/contrib/vt/wrappers/mpif77-vt-wrapper-data.txt
config.status: creating ompi/contrib/vt/wrappers/mpif90-vt-wrapper-data.txt
config.status: creating Makefile
config.status: creating config/Makefile
config.status: creating contrib/Makefile
config.status: creating opal/Makefile
config.status: creating opal/etc/Makefile
config.status: creating opal/include/Makefile
config.status: creating opal/asm/Makefile
config.status: creating opal/event/Makefile
config.status: creating opal/event/compat/Makefile
config.status: creating opal/event/compat/sys/Makefile
config.status: creating opal/util/Makefile
config.status: creating opal/util/keyval/Makefile
config.status: creating opal/mca/base/Makefile
config.status: creating opal/tools/wrappers/Makefile
config.status: creating opal/tools/wrappers/opalcc-wrapper-data.txt
config.status: creating opal/tools/wrappers/opalc++-wrapper-data.txt
config.status: creating opal/tools/opal-checkpoint/Makefile
config.status: creating opal/tools/opal-restart/Makefile
config.status: creating orte/Makefile
config.status: creating orte/include/Makefile
config.status: creating orte/etc/Makefile
config.status: creating orte/tools/orted/Makefile
config.status: creating orte/tools/orterun/Makefile
config.status: creating orte/tools/wrappers/Makefile
config.status: creating orte/tools/wrappers/ortecc-wrapper-data.txt
config.status: creating orte/tools/wrappers/ortec++-wrapper-data.txt
config.status: creating orte/tools/orte-checkpoint/Makefile
config.status: creating orte/tools/orte-iof/Makefile
config.status: creating orte/tools/orte-restart/Makefile
config.status: creating orte/tools/orte-ps/Makefile
config.status: creating orte/tools/orte-clean/Makefile
config.status: creating ompi/Makefile
config.status: creating ompi/etc/Makefile
config.status: creating ompi/include/Makefile
config.status: creating ompi/include/mpif.h
config.status: creating ompi/include/mpif-config.h
config.status: creating ompi/datatype/Makefile
config.status: creating ompi/debuggers/Makefile
config.status: creating ompi/mpi/c/Makefile
config.status: creating ompi/mpi/c/profile/Makefile
config.status: creating ompi/mpi/cxx/Makefile
config.status: creating ompi/mpi/f77/Makefile
config.status: creating ompi/mpi/f77/profile/Makefile
config.status: creating ompi/mpi/f90/Makefile
config.status: creating ompi/mpi/f90/fortran_kinds.sh
config.status: creating ompi/mpi/f90/fortran_sizes.h
config.status: creating ompi/mpi/f90/scripts/Makefile
config.status: creating ompi/tools/ompi_info/Makefile
config.status: creating ompi/tools/wrappers/Makefile
config.status: creating ompi/tools/wrappers/mpicc-wrapper-data.txt
config.status: creating ompi/tools/wrappers/mpic++-wrapper-data.txt
config.status: creating ompi/tools/wrappers/mpif77-wrapper-data.txt
config.status: creating ompi/tools/wrappers/mpif90-wrapper-data.txt
config.status: creating ompi/tools/ortetools/Makefile
config.status: creating ompi/tools/ompi-server/Makefile
config.status: creating test/Makefile
config.status: creating test/event/Makefile
config.status: creating test/asm/Makefile
config.status: creating test/class/Makefile
config.status: creating test/support/Makefile
config.status: creating test/threads/Makefile
config.status: creating test/peruse/Makefile
config.status: creating test/datatype/Makefile
config.status: creating opal/include/opal_config.h
config.status: creating orte/include/orte_config.h
config.status: creating ompi/include/ompi_config.h
config.status: creating ompi/include/mpi.h
config.status: creating opal/mca/paffinity/linux/plpa/src/libplpa/plpa_config.h
config.status: creating opal/mca/paffinity/linux/plpa/src/libplpa/plpa.h
config.status: executing depfiles commands
config.status: executing libtool commands
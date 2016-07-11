<?php

$CODEBLK_ENDADR = ((0x00100000 + 0x0026D000 + 0x00064000 + 0x00018000 + 0x00056AA8) + 0xfff) & ~0xfff;
$OSSCRO_HEAPADR = 0x08385000;
$WEBKITCRO_HEAPADR = 0x08559000;
$APPHEAP_PHYSADDR = 0x25000000;
init_mapaddrs_cro();

$STACKPIVOT_ADR = 0x0012fe54;
$COND_THROWFATALERR = 0x0019e910;

$ROP_POP_R0R6PC = 0x00105118;
$ROP_POP_R0R8PC = 0x00130ac8;
$ROP_POP_R0PC = 0x0010c2f8;
$ROP_POP_R1R5PC = 0x00101e9c;

$ROP_STR_R1TOR0 = 0x001040dc;
$ROP_LDR_R0FROMR0 = 0x00111664;
$ROP_ADDR0_TO_R1 = 0x0012b660;

$ROP_WRITETHREADSTORAGEPTR_TOR4R5 = 0x00168264;

$srv_GetServiceHandle = 0x0023b944;

$svcGetProcessId = 0x00100ca8;
$svcSendSyncRequest = 0x0024382c;
$svcControlMemory = 0x00142fa0;
$svcSleepThread = 0x00104218;

$GXLOW_CMD4 = 0x0011dd48;
$GSPGPU_SERVHANDLEADR = 0x003da704;

$FS_MOUNTSDMC = 0x0019c258;

$IFile_Open = 0x0022f284;
$IFile_GetSize = 0x00206574;
$IFile_Seek = 0x00151410;
$IFile_Read = 0x001680f8;

$FS_DELETEFILE = 0x00167ddc;

$FSFILEIPC_CLOSE = 0x0027e080;
$FSFILEIPC_READ = 0x0027e028;
$FSFILEIPC_GETSIZE = 0x0027e10c;

$POPPC = 0x001057b4;

$ROP_STR_R0TOR1 = $WEBKITCRO_MAPADR+0x0002f988;

$WKC_FOPEN = $OSSCRO_MAPADR+0x5b0-0x4;
$WKC_FCLOSE = $OSSCRO_MAPADR+0x5a8-0x4;
$WKC_FREAD = $OSSCRO_MAPADR+0x5b8-0x4;
$WKC_FWRITE = $OSSCRO_MAPADR+0x5c0-0x4;
$WKC_FSEEK = $OSSCRO_MAPADR+0x5d0-0x4;

$ROP_curl_easy_cleanup = $WEBKITCRO_MAPADR+0xe14-0x4;
$ROP_curl_easy_init = $WEBKITCRO_MAPADR+0xe1c-0x4;
$ROP_curl_easy_perform = $WEBKITCRO_MAPADR+0xe44-0x4;
$ROP_curl_easy_setopt = $WEBKITCRO_MAPADR+0x994-0x4;

$ROP_MEMCPY = $WEBKITCRO_MAPADR+0x194-0x4;
$ROP_MEMSETOTHER = $WEBKITCRO_MAPADR+0x30c-0x4;

$ROP_snprintf = $OSSCRO_MAPADR+0x3c0-0x4;

$GSP_FLUSHDCACHE = 0x00190d30;
$GSP_WRITEHWREGS = 0x0011e150;

$IFile_Close = 0x001fccc0;
$IFile_Write = 0x00168180;

$OPENFILEDIRECTLY_WRAP = 0x0027aa20;

$THROW_FATALERR = 0x001518d0;

$ROP_POP_R0IPPC = 0x0018c1d0;

$ROP_LDR_R0_FROMR0_SHIFTR1 = 0x0010121c;

$ROP_LDMSTM_R5R4_R0R3 = 0x001d3344;

$ROP_STMR0_R0PC = 0x001bad2c;

$ROP_LDRR0R4_LDRR0_R0OFF4_LDRR0_R0OFF34_OBJVTABLECALL_5C_POPR4LR = $WEBKITCRO_MAPADR+0x0036a998;

?>

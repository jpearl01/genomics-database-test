#!/usr/bin/perl

use strict;
use warnings;
use DBI;
use DBD::mysql;

#create some variables for db connection:
my $host = 'localhost';
my $database = "genomics_test";
my $tablename = "HSLog";
my $user = "josh";
my $pw = "cgs-1953-asri";


my $dsn = "dbi:mysql:$database:$host:3306";

my $genomics_connect = DBI->connect($dsn, $user, $pw);

my $HSquery = "SELECT * FROM HSLog";
my $HSqueryHandle = $genomics_connect->prepare($HSquery);

$HSqueryHandle->execute();

my ($HS_num,
$StudyCode,
$SpeciesCode,
$TissCode,
$TissRef,
$CollectDate,
$RecdDate,
$CollectBy,
$Subj_num,
$SubjPrefix,
$SubjFirstName,
$SubjMiddleName,
$SubjLastName,
$SubjSuffix,
$SubjDegree,
$SubjSex,
$SubjDOB,
$SubjSSN,
$PtCode,
$CollabCode,
$CoPrefix,
$CoFirstName,
$CoMiddleName,
$CoLastName,
$CoSuffix,
$CoDegree,
$CoInstCode,
$InstCode,
$InstName,
$InstCity,
$InstState,
$InstCountry,
$InstPhone,
$NA_num,
$Stu_num,
$Comments,
$KbdDate,
$InKbd,
$File_num,
$SNP,
$Freezer,
$Rack,
$Box,
$Slot,
$UpdateUser,
$UpdateDate,
$BSNum,
$InstZipCode);

$HSqueryHandle->bind_columns(undef, \$HS_num,
\$StudyCode,
\$SpeciesCode,
\$TissCode,
\$TissRef,
\$CollectDate,
\$RecdDate,
\$CollectBy,
\$Subj_num,
\$SubjPrefix,
\$SubjFirstName,
\$SubjMiddleName,
\$SubjLastName,
\$SubjSuffix,
\$SubjDegree,
\$SubjSex,
\$SubjDOB,
\$SubjSSN,
\$PtCode,
\$CollabCode,
\$CoPrefix,
\$CoFirstName,
\$CoMiddleName,
\$CoLastName,
\$CoSuffix,
\$CoDegree,
\$CoInstCode,
\$InstCode,
\$InstName,
\$InstCity,
\$InstState,
\$InstCountry,
\$InstPhone,
\$NA_num,
\$Stu_num,
\$Comments,
\$KbdDate,
\$InKbd,
\$File_num,
\$SNP,
\$Freezer,
\$Rack,
\$Box,
\$Slot,
\$UpdateUser,
\$UpdateDate,
\$BSNum,
\$InstZipCode);

my ($CO_CollabCode,
$CO_InstCode,
$CO_Prefix,
$CO_FirstName,
$CO_MiddleName,
$CO_LastName,
$CO_Suffix,
$CO_Degree,
$CO_Specialty,
$CO_Title,
$CO_Dept,
$CO_Addr1,
$CO_Addr2,
$CO_City,
$CO_State,
$CO_ZipCode,
$CO_Country,
$CO_DayPhone,
$CO_EvePhone,
$CO_Fax,
$CO_EMail,
$CO_WebSite,
$CO_Comments,
$CO_KbdDate,
$CO_InKbd,
$CO_UpdateUser,
    $CO_UpdateDate);


while($HSqueryHandle->fetch()){
    my $COquery = "SELECT * FROM Collaborator WHERE CollabCode=$CollabCode";
    my $COqueryHandle = $genomics_connect->prepare($COquery);
    $COqueryHandle->execute();
    $HSqueryHandle->bind_columns(undef,
				 \$CO_CollabCode,
				 \$CO_InstCode,
				 \$CO_Prefix,
				 \$CO_FirstName,
				 \$CO_MiddleName,
				 \$CO_LastName,
				 \$CO_Suffix,
				 \$CO_Degree,
				 \$CO_Specialty,
				 \$CO_Title,
				 \$CO_Dept,
				 \$CO_Addr1,
				 \$CO_Addr2,
				 \$CO_City,
				 \$CO_State,
				 \$CO_ZipCode,
				 \$CO_Country,
				 \$CO_DayPhone,
				 \$CO_EvePhone,
				 \$CO_Fax,
				 \$CO_EMail,
				 \$CO_WebSite,
				 \$CO_Comments,
				 \$CO_KbdDate,
				 \$CO_InKbd,
				 \$CO_UpdateUser,
				 \$CO_UpdateDate);
    while($COqueryHandle->fetch()){
	if (exists $CO_Collab
    }
    print "$HS_num $StudyCode\n";
}

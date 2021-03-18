<?php

declare(strict_types=1);

namespace HansPeterOrding\NflFastrSymfonyBundle\Entity\Game\Play;

interface PlayerAssignmentInterface
{
	const PLAYER_ASSIGNMENT_TYPE_TD = 'td';
	const PLAYER_ASSIGNMENT_TYPE_PASSER = 'passer';
	const PLAYER_ASSIGNMENT_TYPE_RECEIVER = 'receiver';
	const PLAYER_ASSIGNMENT_TYPE_RUSHER = 'rusher';
	const PLAYER_ASSIGNMENT_TYPE_LATERAL_RECEIVER = 'lateralReceiver';
	const PLAYER_ASSIGNMENT_TYPE_LATERAL_RUSHER = 'lateralRusher';
	const PLAYER_ASSIGNMENT_TYPE_LATERAL_SACK = 'lateralSack';
	const PLAYER_ASSIGNMENT_TYPE_INTERCEPTION = 'interception';
	const PLAYER_ASSIGNMENT_TYPE_LATERAL_INTERCEPTION = 'lateralInterception';
	const PLAYER_ASSIGNMENT_TYPE_PUNT_RETURNER = 'puntReturner';
	const PLAYER_ASSIGNMENT_TYPE_LATERAL_PUNT_RETURNER = 'lateralPuntReturner';
	const PLAYER_ASSIGNMENT_TYPE_KICKOFF_RETURNER = 'kickoffReturner';
	const PLAYER_ASSIGNMENT_TYPE_LATERAL_KICKOFF_RETURNER = 'lateralKickoffReturner';
	const PLAYER_ASSIGNMENT_TYPE_PUNTER = 'punter';
	const PLAYER_ASSIGNMENT_TYPE_KICKER = 'kicker';
	const PLAYER_ASSIGNMENT_TYPE_OWN_KICKOFF_RECOVERY = 'ownKickoffRecovery';
	const PLAYER_ASSIGNMENT_TYPE_BLOCKED = 'blocked';
	const PLAYER_ASSIGNMENT_TYPE_TACKLE_FOR_LOSS = 'tackleForLoss';
	const PLAYER_ASSIGNMENT_TYPE_QB_HIT = 'qbHit';
	const PLAYER_ASSIGNMENT_TYPE_FORCED_FUMBLE = 'forcedFumble';
	const PLAYER_ASSIGNMENT_TYPE_SOLO_TACKLE = 'soloTackle';
	const PLAYER_ASSIGNMENT_TYPE_ASSIST_TACKLE = 'assistTackle';
	const PLAYER_ASSIGNMENT_TYPE_TACKLE_WITH_ASSIST = 'tackleWithAssist';
	const PLAYER_ASSIGNMENT_TYPE_PASS_DEFENSE = 'passDefense';
	const PLAYER_ASSIGNMENT_TYPE_FUMBLED = 'fumbled';
	const PLAYER_ASSIGNMENT_TYPE_FUMBLE_RECOVERY = 'fumbleRecovery';
	const PLAYER_ASSIGNMENT_TYPE_PENALTY = 'penalty';
	const PLAYER_ASSIGNMENT_TYPE_FANTASY = 'fantasy';
}

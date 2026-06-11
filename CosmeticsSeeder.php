<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Personnage;

/**
 * Remplit les cosmétiques des personnages à partir du wiki Fandom :
 * costumes, animations MVP, emotes, sprays, nameplates + histoire (Personality).
 *
 * Les images pointent vers le CDN du wiki (hotlink) : elles ne sont PAS
 * téléchargées localement. Les vues détectent les URL externes (http).
 *
 * Idempotent (updateOrCreate). Facile à étendre : un bloc par personnage.
 */
class CosmeticsSeeder extends Seeder
{
    public function run(): void
    {
        $data = [

            'Adam Warlock' => [

                'histoire' => "Adam Warlock a été créé pour être un humain parfait : brillant, puissant et au cœur pur. Depuis ses tout premiers souvenirs, il lutte contre les attentes placées en lui et contre la notion même de ce que signifie réellement être « parfait ». Sa personnalité reflète ce conflit intérieur : il est noble, contemplatif et souvent accablé par le poids du destin. Warlock réfléchit longuement avant d'agir, guidé par un sens moral puissant et par le désir de comprendre ce qui est bien et mal à l'échelle cosmique. Cependant, son sentiment d'avoir une mission peut parfois l'isoler ; il perçoit l'univers en termes philosophiques et peine à se lier avec ceux qui mènent des vies ordinaires et imparfaites. Avant sa résurrection, Adam était une figure sombre, presque tragique. Dans sa quête désespérée d'un sens à sa vie, il a trouvé du réconfort en devenant une force du bien. Profondément introspectif, il s'interroge sans cesse sur sa place dans l'univers, sur les desseins de ses créateurs et sur sa propre nature. Il cherche l'équilibre, non seulement dans l'univers, mais aussi en lui-même. Cette attitude contemplative fait de lui un meneur naturel et une boussole morale pour les autres, mais le rend aussi sujet à des crises existentielles et à des moments de doute lorsqu'il croit que ses actes risquent de briser la paix qu'il s'efforce de préserver.\n\nAdam est dépeint comme un génie philosophe, austère et distant, qui lutte avec sa double nature — le « bien » parfait et le mal chaotique — tout en se comportant avec une sérénité presque imperturbable. C'est un être noble et vertueux, mais aussi assez arrogant. Il s'exprime généralement d'une manière très formelle et prolixe, usant abondamment d'allitérations pour souligner la conscience qu'il a de son pouvoir et de son destin, ce qui donne une impression de sagesse bien au-delà de son âge. La vision étendue de Warlock façonne son cadre moral singulier, le poussant à prendre des décisions inattendues qui favorisent l'équilibre global du monde plutôt que le bien ou le mal traditionnels. Il manifeste aussi de la compassion et un instinct protecteur envers ceux qu'il aime, comme les Gardiens de la Galaxie ou les êtres innocents envers lesquels il se sent responsable. Lors d'une interaction en jeu avec Wolverine, il évoque sa part la plus sombre, Magus, une version de lui-même corrompue par le pouvoir et le fanatisme. Bien qu'on n'ait pas encore vu ni révélé la transformation d'Adam en Magus, il est connu pour être prêt à absorber Magus en lui, malgré le risque de corruption, afin de sauver les autres et le cosmos.",

                'capacites' => [
                    ['nom' => 'Magie Quantique',       'touche' => 'Clic gauche', 'type' => 'Attaque normale',  'degats' => 60,   'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/20/Quantum_Magic_Icon.png/revision/latest?cb=20250915155213',      'description' => "Tir hitscan qui lance de rapides traits d'énergie pour blesser les ennemis."],
                    ['nom' => 'Amas Cosmique',         'touche' => 'Clic droit',  'type' => 'Attaque spéciale', 'degats' => 38,   'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/ed/Cosmic_Cluster_Icon.png/revision/latest?cb=20250915040844',     'description' => "Charge le bâton puis libère plusieurs traits d'énergie (jusqu'à 5 projectiles)."],
                    ['nom' => "Flux Vital de l'Avatar",'touche' => 'E',           'type' => 'Capacité',         'degats' => null, 'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/6/6c/Avatar_Life_Stream_Icon.png/revision/latest?cb=20250915040839', 'description' => "Énergie de soin rebondissante touchant jusqu'à deux alliés (2 charges)."],
                    ['nom' => "Lien d'Âme",            'touche' => 'Maj',         'type' => 'Capacité',         'degats' => null, 'rechargement' => 40,   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/34/Soul_Bond_Icon.png/revision/latest?cb=20250915040833',         'description' => "Crée un lien entre Adam et les alliés proches, répartissant équitablement les dégâts subis."],
                    ['nom' => 'Résurrection Karmique',  'touche' => 'Q',           'type' => 'Ultime',           'degats' => null, 'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/45/Karmic_Revival_Icon.png/revision/latest?cb=20250915040921',       'description' => "Crée une zone quantique qui ressuscite automatiquement les alliés tombés à l'intérieur."],
                    ['nom' => 'Cocon Régénérateur',    'touche' => 'Passif',      'type' => 'Passif',           'degats' => null, 'rechargement' => 105,  'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/9/95/Regenerative_Cocoon_Icon.png/revision/latest?cb=20250915040851', 'description' => "Permet à Adam de réapparaître depuis un cocon à un endroit choisi."],
                ],

                'costumes' => [
                    ['nom' => 'Magus',            'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/0/07/CosInfo_-_Adam_Warlock_Magus_Icon.png/revision/latest?cb=20260110032337'],
                    ['nom' => 'Sorcier Cosmique', 'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/7a/CosInfo_-_Adam_Warlock_Cosmic_Warlock_Icon.png/revision/latest?cb=20260110020954'],
                    ['nom' => 'Tribunal Vivant',  'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/f3/CosInfo_-_Adam_Warlock_Living_Tribunal_Icon.png/revision/latest?cb=20260319234338'],
                ],

                'mvp' => [
                    ['nom' => 'Arcane Sombre',     'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/9/93/Adam_Warlock_MVP_-_Dark_Arcanum_Full.gif/revision/latest?cb=20260121211503'],
                    ['nom' => 'Voyage Cosmique',   'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/0/03/Adam_Warlock_MVP_-_Cosmic_Voyage_Full.gif/revision/latest?cb=20260121210917'],
                    ['nom' => 'Autorité Absolue',  'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/7b/Adam_Warlock_MVP_-_Absolute_Authority_Full.gif/revision/latest?cb=20260327102601'],
                ],

                'emotes' => [
                    ['nom' => 'Guidance Galactique',  'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/16/Adam_Warlock_Emote_-_Galactic_Guidance_Full.gif/revision/latest?cb=20260111005231'],
                    ['nom' => 'Innocence Renaissante','rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/a9/Adam_Warlock_Emote_-_Innocence_Reborn_Full.gif/revision/latest?cb=20251227221549'],
                    ['nom' => 'Ombres du Passé',      'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/5/54/Adam_Warlock_Emote_-_Shadows_of_the_Past_Full.gif/revision/latest?cb=20260327102552'],
                    ["nom" => "L'Éclat Appelle",      'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/c4/Adam_Warlock_Emote_-_Brilliance_Beckons_Full.gif/revision/latest?cb=20251227220407'],
                    ['nom' => 'Force Souveraine',     'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/e8/Adam_Warlock_Emote_-_Sovereign_Strength_Full.gif/revision/latest?cb=20251227221414'],
                    ['nom' => 'Exorcisme Divin',      'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/aa/Adam_Warlock_Emote_-_Divine_Exorcism_Full.gif/revision/latest?cb=20251227221054'],
                    ['nom' => 'Prends un Siège',      'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/7a/Adam_Warlock_Emote_-_Take_A_Seat_Full.gif/revision/latest?cb=20260111004839'],
                    ['nom' => 'Défaut',               'rarete' => 'Défaut', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/0/09/Adam_Warlock_Emote_-_DEFAULT_Full.gif/revision/latest?cb=20251227220800'],
                ],

                'sprays' => [
                    ['nom' => 'Sorcier Cosmique',              'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/5/57/Spray_Icon_-_Cosmic_Warlock.png/revision/latest?cb=20260108211524'],
                    ['nom' => 'Âme de Sang',                   'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/9/9b/Spray_Icon_-_Blood_Soul.png/revision/latest?cb=20250911184208'],
                    ['nom' => 'Tribunal Vivant',               'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/ef/Spray_Icon_-_Living_Tribunal.png/revision/latest?cb=20260320014901'],
                    ['nom' => 'Magus',                         'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/2f/Spray_Icon_-_Magus.png/revision/latest?cb=20251114060913'],
                    ['nom' => 'Gardiens de la Galaxie Vol. 3', 'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/49/Spray_Icon_-_Guardians_of_the_Galaxy%2C_Vol.3_Adam_Warlock.png/revision/latest?cb=20250116162501'],
                    ['nom' => 'Avatar Immortel',               'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/a0/Spray_Icon_-_Immortal_Avatar.png/revision/latest?cb=20250522120729'],
                    ['nom' => 'Roi en Blanc',                  'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/5/5b/Spray_Icon_-_King_in_White.png/revision/latest?cb=20250706025906'],
                    ["nom" => "Emblème d'Adam Warlock",        'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/ce/Spray_Icon_-_Adam_Warlock_Emblem.png/revision/latest?cb=20250125031152'],
                ],

                'nameplates' => [
                    ['nom' => 'Sorcier Cosmique',              'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/1b/Adam_Warlock_Full_Nameplate_-_Cosmic_Warlock.gif/revision/latest?cb=20260403233405'],
                    ['nom' => 'Âme de Sang',                   'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/75/Adam_Warlock_Full_Nameplate_-_Blood_Soul.png/revision/latest?cb=20250123010743'],
                    ['nom' => 'Tribunal Vivant',               'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/c0/Adam_Warlock_Full_Nameplate_-_Living_Tribunal.png/revision/latest?cb=20260320110412'],
                    ['nom' => 'Magus',                         'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/5/56/Adam_Warlock_Full_Nameplate_-_Magus.png/revision/latest?cb=20251114052423'],
                    ['nom' => 'Gardiens de la Galaxie Vol. 3', 'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/8/84/Adam_Warlock_Full_Nameplate_-_Guardians_of_the_Galaxy_Vol._3.png/revision/latest?cb=20250125032735'],
                    ['nom' => 'Avatar Immortel',               'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/ad/Adam_Warlock_Full_Nameplate_-_Immortal_Avatar.png/revision/latest?cb=20250522121751'],
                    ['nom' => 'Roi en Blanc',                  'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/5/5f/Adam_Warlock_Full_Nameplate_-_King_in_White.png/revision/latest?cb=20250706030329'],
                ],
            ],

            'Angela' => [

                'vie' => 450,

                'histoire' => "Angela est décrite comme une déesse guerrière puissante, fière et déterminée. Elle a un sens aigu du devoir, envers son héritage mais aussi envers ce qu'elle estime juste. Autonome et indépendante, elle a été élevée comme une chasseuse et formée par les anges de Heven à combattre, commander et survivre. Décrite comme sûre d'elle, arrogante et prompte à la colère, elle embrasse le combat et affronte de grands adversaires — armées et monstres — même quand les chances sont contre elle. C'est une combattante redoutable qui affronte les difficultés par le raisonnement, la stratégie et une confiance inébranlable. Contrairement à beaucoup, Angela ne s'appuie pas sur l'autorité ou la tradition pour se guider ; elle se fie à son intuition et prend ses propres décisions, traçant une voie qui reflète ses idéaux et son propre code d'honneur.\n\nBien qu'elle soit l'une des enfants d'Odin, Angela méprise profondément son père. Durant la majeure partie de sa vie, elle a ignoré qui étaient ses vrais parents ; pendant des années, elle a vu Odin comme un roi-dieu despotique plutôt que comme son père. En découvrant la vérité, elle se sent trahie, en colère et dégoûtée par le mensonge qu'a été sa vie, ainsi que par l'échec d'Odin à la sauver alors qu'elle n'était qu'un nourrisson durant la guerre entre Asgard et Heven. Malgré sa nature guerrière, Angela est très protectrice et compatissante envers ceux qu'elle aime, comme sa jeune sœur Laussa, et ses amis, dont les Gardiens de la Galaxie, dont elle a fait partie un temps. Sous son extérieur endurci par les batailles, elle est réfléchie et empathique, attachée à la loyauté et aux liens avec ceux en qui elle a confiance. Prudente et sur ses gardes, elle est aussi curieuse et prête à affronter l'injustice : sa force est équilibrée par l'empathie et une clarté morale.",

                'capacites' => [
                    ['nom' => "Lance d'Ichor",          'touche' => 'Clic gauche', 'type' => 'Attaque normale', 'degats' => 45,   'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/44/Spear_of_Ichors_Icon.png', 'description' => "Frappe en avant avec votre lance, infligeant des dégâts qui augmentent avec la Charge d'Attaque. À pleine charge, projette les ennemis en l'air."],
                    ['nom' => "Haches d'Ichor",         'touche' => 'Clic gauche', 'type' => 'Attaque normale', 'degats' => 30,   'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/4c/Axes_of_Ichors_Icon.png', 'description' => "Combo de quatre frappes avec les haches jumelles ; la quatrième propulse Angela vers l'avant."],
                    ['nom' => 'Posture de Bouclier',    'touche' => 'Clic droit',  'type' => 'Capacité',        'degats' => null, 'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/b/b3/Shielded_Stance_Icon.png', 'description' => "Transforme les Ichors en bouclier et gagne de la Charge d'Attaque en absorbant les dégâts."],
                    ['nom' => "Charge de l'Assassin",   'touche' => 'Maj',         'type' => 'Capacité',        'degats' => null, 'rechargement' => 6,    'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/f4/Assassin%27s_Charge_Icon.png', 'description' => "Charge accélérée, immunisée contre les projections ; les ennemis touchés de plein fouet sont emportés."],
                    ['nom' => 'Jugement Divin',         'touche' => 'E',           'type' => 'Capacité',        'degats' => 30,   'rechargement' => 12,   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/19/Divine_Judgement_Icon.png', 'description' => "Plonge au sol, passe aux haches et crée une Zone de Jugement Divin (vitesse accrue et points de vie bonus pour les alliés)."],
                    ['nom' => "Ascension de l'Aile-Lame",'touche' => 'E',          'type' => 'Capacité',        'degats' => null, 'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/c8/Wingblade_Ascent_Icon.png', 'description' => "S'élève dans les airs et repasse à la Lance d'Ichor (vol libre)."],
                    ['nom' => 'Châtiment de Heven',     'touche' => 'Q',           'type' => 'Ultime',          'degats' => 100,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/f6/Heven%27s_Retribution_Icon.png', 'description' => "Ultime : projette la lance enrubannée ; à l'impact, les rubans entravent les ennemis proches. Angela peut bondir vers la lance pour créer une Zone de Jugement Divin."],
                    ['nom' => 'Envol Séraphique',       'touche' => 'Passif',      'type' => 'Passif',          'degats' => null, 'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/6/6d/Seraphic_Soar_Icon.png', 'description' => "Passif : plane librement dans les airs ; un vol continu augmente la Charge d'Attaque."],
                ],

                'costumes' => [
                    ['nom' => 'Skuld 2099',            'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/78/Angela_Skuld_2099_LoC_Icon.png'],
                    ['nom' => 'As de Pique',           'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/ee/Angela_Ace_of_Spades_LoC_Icon.png'],
                    ["nom" => "La Belle Fille d'Odin", 'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/8/85/Angela_Odin%27s_Beautiful_Daughter_LoC_Icon.png'],
                    ['nom' => 'Ange de Doom',          'rarete' => 'Rare',       'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/c4/Angela_Doom_Angel_LoC_Icon.png'],
                ],

                'mvp' => [
                    ['nom' => 'Briser les Chaînes',       'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/a7/Angela_MVP_-_Escape_the_Shackles_Full.gif/revision/latest?cb=20260225171532'],
                    ['nom' => 'Frappe du Tigre Radieux',  'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/8/87/Angela_MVP_-_Radiant_Tiger_Strike_Full.gif/revision/latest?cb=20260225171737'],
                    ["nom" => "Tornade de l'As",          'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/18/Angela_MVP_-_Ace_Tornado_Full.gif/revision/latest?cb=20260225170226'],
                ],

                'emotes' => [
                    ['nom' => 'Pour Heven !',    'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/fe/Angela_Emote_-_For_Heven%21_Full.gif/revision/latest?cb=20251228110221'],
                    ['nom' => 'Tigre Accroupi',  'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/30/Angela_Emote_-_Crouching_Tiger_Full.gif/revision/latest?cb=20251227202952'],
                    ['nom' => 'Fantôme du Poker', 'rarete' => 'Rare',  'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/7b/Angela_Emote_-_Poker_Phantom_Full.gif/revision/latest?cb=20260131005442'],
                    ['nom' => 'Perce-Sorcière',  'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/a3/Angela_Emote_-_Witchpiercer_Full.gif/revision/latest?cb=20260327103906'],
                    ['nom' => 'Défaut',          'rarete' => 'Défaut', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/48/Angela_Emote_-_DEFAULT_Full.gif/revision/latest?cb=20251228110318'],
                ],

                'sprays' => [
                    ['nom' => 'Skuld 2099',            'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/28/Spray_Icon_-_Skuld_2099.png/revision/latest?cb=20250907131203'],
                    ["nom" => "La Belle Fille d'Odin", 'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/d1/Spray_Icon_-_Odin%27s_Beautiful_Daughter.png/revision/latest?cb=20251114061128'],
                    ['nom' => 'As de Pique',           'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/0/06/Spray_Icon_-_Ace_of_Spades.png/revision/latest?cb=20260129122442'],
                    ['nom' => 'Ange de Doom',          'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/18/Spray_Icon_-_Doom_Angel.png/revision/latest?cb=20260320014931'],
                    ["nom" => "Emblème d'Angela",      'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/33/Spray_Icon_-_Angela_Emblem.png/revision/latest?cb=20250907131008'],
                ],

                'nameplates' => [
                    ['nom' => 'Skuld 2099',            'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/9/9a/Angela_Full_Nameplate_-_Skuld_2099.gif/revision/latest?cb=20260407094106'],
                    ["nom" => "La Belle Fille d'Odin", 'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/8/82/Angela_Full_Nameplate_-_Odin%27s_Beautiful_Daughter.png/revision/latest?cb=20251114052708'],
                    ['nom' => 'As de Pique',           'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/3e/Angela_Full_Nameplate_-_Ace_of_Spades.png/revision/latest?cb=20260129121457'],
                    ['nom' => 'Ange de Doom',          'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/72/Angela_Full_Nameplate_-_Doom_Angel.png/revision/latest?cb=20260320100124'],
                    ['nom' => 'Angela',                'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/ac/Angela_Full_Nameplate_-_Angela.png/revision/latest?cb=20250907124454'],
                ],
            ],

            'Black Panther' => [

                'vie' => 275,

                'histoire' => "T'Challa, aussi appelé la Panthère Noire et roi du Wakanda, est un dirigeant discipliné, intelligent et profondément éthique, qui porte à la fois le poids du guerrier et celui du roi. Souverain de la nation africaine du Wakanda, il incarne un mélange rare d'autorité royale et de retenue émotionnelle, réfléchissant longuement avant d'agir. Poli, respectueux et attentionné, il honore la loyauté envers ceux qu'il considère comme des amis — les Avengers comme les X-Men — et voue un profond respect aux siens, en particulier à son défunt père T'Chaka et à sa jeune sœur Shuri. Intensément protecteur de son peuple et de sa culture, il chérit la tradition sans hésiter à la remettre en question quand la justice ou le progrès l'exigent.\n\nT'Challa croit fermement à la justice, mais il est aussi réaliste : il comprend les complexités du pouvoir, de la diplomatie et de la guerre, et doit parfois prendre des décisions difficiles pesant la liberté individuelle face aux besoins du plus grand nombre. Souvent stoïque, il manifeste un humour chaleureux avec ses proches et exprime ouvertement le chagrin ou la rage quand la situation l'impose. Fervent croyant en la déesse Bast dont il porte le manteau, c'est un guerrier valeureux et un tacticien hors pair qui privilégie toujours la paix lorsque c'est possible, respectant même ses adversaires. Comptant parmi les esprits les plus brillants de l'univers, rivalisant avec Tony Stark et Reed Richards, il anticipe de nombreux coups à l'avance et agit avec précision. Storm, reine du Wakanda, fut autrefois son épouse ; même après la fin de leur mariage, un lien émotionnel fort subsiste entre eux.",

                'capacites' => [
                    ['nom' => 'Griffes en Vibranium',     'touche' => 'Clic gauche', 'type' => 'Attaque normale', 'degats' => 35,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/0/04/Vibranium_Claws_Icon.png', 'description' => "Tranche les ennemis devant soi avec les griffes en vibranium."],
                    ['nom' => 'Lancer de Lance',          'touche' => 'Clic droit',  'type' => 'Capacité',        'degats' => 50,  'rechargement' => 5,    'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/d2/Spear_Toss_Icon.png', 'description' => "Projette une lance d'énergie en arc qui crée un champ de force et applique une Marque de Vibranium aux ennemis touchés."],
                    ['nom' => 'Déchirure Spirituelle',    'touche' => 'Maj',         'type' => 'Capacité',        'degats' => 80,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/fc/Spirit_Rend_Icon.png', 'description' => "Bondit en avant et inflige des dégâts ; la Marque de Vibranium octroie des points de vie bonus et réinitialise la capacité."],
                    ['nom' => 'Coup de Pied Tournoyant',  'touche' => 'E',           'type' => 'Capacité',        'degats' => 75,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/45/Spinning_Kick_Icon.png', 'description' => "S'élance en spirale et applique une Marque de Vibranium aux ennemis touchés."],
                    ['nom' => 'Pas Furtif',               'touche' => 'Espace',      'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/6/6e/Subtle_Step_Icon.png', 'description' => "Maintenir Espace pour courir sur un mur, puis sauter en s'en détachant."],
                    ['nom' => 'Descente de Bast',         'touche' => 'Q',           'type' => 'Ultime',          'degats' => 150, 'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/dd/Bast%27s_Descent_Icon.png', 'description' => "Ultime : invoque Bast qui bondit en avant, inflige des dégâts, applique des Marques de Vibranium et réinitialise la Déchirure Spirituelle."],
                    ['nom' => 'Ruse de la Panthère',      'touche' => 'Passif',      'type' => 'Passif',          'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/9/98/Panther%27s_Cunning_Icon.png', 'description' => "Passif : inflige davantage de dégâts lorsque les points de vie tombent sous 100."],
                ],

                'costumes' => [
                    ['nom' => 'Damisa-Sarki',          'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/32/Black_Panther_Damisa-Sarki_LoC_Icon.png'],
                    ["nom" => "L'Élu de Bast",         'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/c2/Black_Panther_Bast%27s_Chosen_LoC_Icon.png'],
                    ['nom' => 'Griffe Galactique',     'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/f3/Black_Panther_Galactic_Claw_LoC_Icon.png'],
                    ['nom' => 'Roi du Wakanda',        'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/fe/Black_Panther_King_of_Wakanda_LoC_Icon.png'],
                    ['nom' => 'Panthère Phénix',       'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/a3/Black_Panther_Phoenix_Panther_LoC_Icon.png'],
                    ['nom' => 'Roi Trois Fois Maudit', 'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/ec/Black_Panther_Thrice-Cursed_King_LoC_Icon.png'],
                ],
                'mvp' => [
                    ['nom' => 'Vigilance Éternelle', 'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/25/Black_Panther_MVP_-_Eternal_Vigilance_Full.gif'],
                    ["nom" => "L'Empire Frappe",     'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/a4/Black_Panther_MVP_-_Empire_Strikes_Full.gif'],
                    ['nom' => 'Mariage Majestueux',  'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/5/55/Black_Panther_MVP_-_Majestic_Matrimony_Full.gif'],
                    ['nom' => 'Lignée de Mosi',      'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/b/bb/Black_Panther_MVP_-_Mosi%27s_Lineage_Full.gif'],
                    ["nom" => "Moisson d'Âmes",      'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/ee/Black_Panther_MVP_-_Soul_Harvest_Full.gif'],
                ],
                'emotes' => [
                    ['nom' => 'Souverain Serein',   'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/eb/Black_Panther_Emote_-_Serene_Sovereign_Full.gif'],
                    ['nom' => 'Prêt au Combat',     'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/f9/Black_Panther_Emote_-_Charged_for_Battle_Full.gif'],
                    ['nom' => 'Veux-tu ?',          'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/de/Black_Panther_Emote_-_Will_You%3F_Full.gif'],
                    ['nom' => 'Impulsion Naturelle','rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/9/96/Black_Panther_Emote_-_Natural_Impulse_Full.gif'],
                    ['nom' => 'Flammes du Phénix',  'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/30/Black_Panther_Emote_-_Phoenix_Flames_Full.gif'],
                    ['nom' => 'Gorgée Cramoisie',   'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/b/b9/Black_Panther_Emote_-_Crimson_Quaff_Full.gif'],
                    ['nom' => 'Défaut',             'rarete' => 'Défaut', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/5/55/Black_Panther_Emote_-_DEFAULT_Full.gif'],
                ],
                'sprays' => [
                    ['nom' => 'Damisa-Sarki',             'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/33/Spray_Icon_-_Damisa-Sarki.png'],
                    ['nom' => 'Griffe Galactique',        'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/0/08/Spray_Icon_-_Galactic_Claw.png'],
                    ['nom' => 'Roi du Wakanda',           'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/5/59/Spray_Icon_-_King_of_Wakanda.png'],
                    ["nom" => "L'Élu de Bast",            'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/3c/Spray_Icon_-_Bast%27s_Chosen.png'],
                    ['nom' => 'Panthère Phénix',          'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/33/Spray_Icon_-_Phoenix_Panther.png'],
                    ['nom' => 'Roi Trois Fois Maudit',    'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/b/b4/Spray_Icon_-_Thrice-Cursed_King.png'],
                    ['nom' => 'Emblème de Black Panther',  'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/c6/Spray_Icon_-_Black_Panther_Emblem.png'],
                ],
                'nameplates' => [
                    ['nom' => 'Damisa-Sarki',          'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/a6/Black_Panther_Full_Nameplate_-_Damisa-Sarki.gif'],
                    ['nom' => 'Griffe Galactique',     'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/ef/Black_Panther_Full_Nameplate_-_Galactic_Claw.png'],
                    ['nom' => 'Roi du Wakanda',        'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/29/Black_Panther_Full_Nameplate_-_King_of_Wakanda.png'],
                    ["nom" => "L'Élu de Bast",         'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/4a/Black_Panther_Full_Nameplate_-_Bast%27s_Chosen.png'],
                    ['nom' => 'Panthère Phénix',       'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/41/Black_Panther_Full_Nameplate_-_Phoenix_Panther.png'],
                    ['nom' => 'Roi Trois Fois Maudit', 'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/49/Black_Panther_Full_Nameplate_-_Thrice-Cursed_King.png'],
                    ['nom' => 'Panthère Dorée',        'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/4d/Black_Panther_Full_Nameplate_-_Golden_Panther.png'],
                ],
            ],

            'Black Widow' => [
                'vie' => 250,
                'histoire' => "Natasha est foncièrement froide, calculatrice, cultivée et stratège. Entraînée comme espionne dès son plus jeune âge dans le brutal programme soviétique de la Chambre Rouge, elle a appris à lire et à éliminer les gens, à manipuler les situations et à toujours garder trois coups d'avance. Elle peut feindre la gentillesse, le flirt, la timidité ou la peur avec un naturel déconcertant. Le plus souvent, c'est une femme calme, indépendante et brillante, parlant plusieurs langues et imitant les accents. Sous son masque émotionnel se cache pourtant une femme aux prises avec la culpabilité, le traumatisme et la quête de rédemption.\n\nNatasha porte depuis des années le poids de son passé — assassinats, trahisons, personnes blessées avant qu'elle ne rejoigne les Avengers. Cette culpabilité la pousse à rechercher la justice, à réparer ses fautes et à protéger les autres, surtout ceux qui ont été manipulés comme elle l'a été. Profondément loyale envers le cercle restreint qu'elle laisse entrer, elle sert souvent d'ancre émotionnelle discrète pour l'équipe. Liée à Clint qui la considère comme sa famille, à Bucky qui la comprend mieux que quiconque et à Logan qui reconnaît la force derrière ses cicatrices, Natasha est avant tout une survivante : elle ne se considère pas comme une héroïne, mais ses actes prouvent le contraire.",
                'capacites' => [
                    ['nom' => 'Matraque Morsure de la Veuve', 'touche' => 'Clic gauche', 'type' => 'Attaque normale', 'degats' => 45,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/46/Widow%27s_Bite_Baton_Icon.png', 'description' => "Frappe rapprochée avec les matraques électriques jumelles."],
                    ['nom' => 'Fusil de la Chambre Rouge',    'touche' => 'Clic gauche', 'type' => 'Attaque normale', 'degats' => 120, 'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/aa/Red_Room_Rifle_Icon.png', 'description' => "Tir unique à distance infligeant de lourds dégâts."],
                    ['nom' => 'Tir de Précision',              'touche' => 'Clic droit',  'type' => 'Capacité',        'degats' => 120, 'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/77/Straight_Shooter_Icon.png', 'description' => "Passe le fusil en mode sniper pour des tirs précis sans perte de dégâts à distance."],
                    ['nom' => 'Pied Leste',                    'touche' => 'Maj',         'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/c4/Fleet_Foot_Icon.png', 'description' => "Bond en avant accordant un saut puissant et une vitesse accrue."],
                    ['nom' => 'Danseuse du Vide',              'touche' => 'E',           'type' => 'Capacité',        'degats' => 35,  'rechargement' => 15,   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/3d/Edge_Dancer_Icon.png', 'description' => "Coup de pied tournoyant qui projette les ennemis en l'air ; un grappin permet un second coup."],
                    ['nom' => "Explosion d'Électro-Plasma",    'touche' => 'Q',           'type' => 'Ultime',          'degats' => 120, 'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/25/Electro-Plasma_Explosion_Icon.png', 'description' => "Ultime : déclenche une explosion d'électro-plasma, vulnérabilise les ennemis et laisse une flaque qui les ralentit."],
                ],
                'costumes' => [
                    ['nom' => 'Battement de Cœur du Lion', 'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/7f/Black_Widow_Lion%27s_Heartbeat_LoC_Icon.png'],
                    ['nom' => 'Suspense de Minuit',        'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/6/6c/Black_Widow_Midnight_Suspense_LoC_Icon.png'],
                    ['nom' => 'Mme Barnes',                'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/22/Black_Widow_Mrs._Barnes_LoC_Icon.png'],
                    ['nom' => 'Veuve Phénix',              'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/5/5e/Black_Widow_Phoenix_Widow_LoC_Icon.png'],
                    ['nom' => 'Voile du Tapis Rouge',      'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/2c/Black_Widow_Red_Runway_Veil_LoC_Icon.png'],
                    ['nom' => 'Costume Blanc',             'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/2c/Black_Widow_White_Suit_LoC_Icon.png'],
                ],
                'mvp' => [
                    ['nom' => 'Fantôme des Opératifs', 'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/1c/Black_Widow_MVP_-_Phantom_of_the_Operatives_Full.gif'],
                    ['nom' => 'Élégance en Mouvement', 'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/6/6f/Black_Widow_MVP_-_Elegance_in_Motion_Full.gif'],
                    ['nom' => 'Tireuse Sauvage',       'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/f8/Black_Widow_MVP_-_Wild_Sharpshooter_Full.gif'],
                    ['nom' => 'Furie du Tambour',      'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/15/Black_Widow_MVP_-_Drum%27s_Fury_Full.gif'],
                    ["nom" => "Abri de l'Hiver",       'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/5/57/Black_Widow_MVP_-_Winter%27s_Shelter_Full.gif'],
                ],
                'emotes' => [
                    ['nom' => 'Prête à Frapper',     'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/7c/Black_Widow_Emote_-_Poised_to_Strike_Full.gif'],
                    ['nom' => 'Charme Arachnéen',    'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/f0/Black_Widow_Emote_-_Arachnid_Allure_Full.gif'],
                    ['nom' => 'Jugement Ardent',     'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/9/9b/Black_Widow_Emote_-_Fiery_Judgment_Full.gif'],
                    ['nom' => 'Tirs de Célébration', 'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/5/56/Black_Widow_Emote_-_Celebratory_Gunfire_Full.gif'],
                    ['nom' => 'Sautillement Élégant','rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/9/94/Black_Widow_Emote_-_Fancy_Skipping_Full.gif'],
                    ['nom' => 'Échauffement',        'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/7d/Black_Widow_Emote_-_Warm_Up_Full.gif'],
                    ['nom' => 'Défaut',              'rarete' => 'Défaut', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/dd/Black_Widow_Emote_-_DEFAULT_Full.gif'],
                ],
                'sprays' => [
                    ['nom' => 'Suspense de Minuit',        'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/f1/Spray_Icon_-_Midnight_Suspense.png'],
                    ['nom' => 'Voile du Tapis Rouge',      'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/9/9f/Spray_Icon_-_Red_Runway_Veil.png'],
                    ['nom' => 'Veuve Phénix',              'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/9/99/Spray_Icon_-_Phoenix_Widow.png'],
                    ['nom' => 'Mme Barnes',                'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/43/Spray_Icon_-_Mrs._Barnes.png'],
                    ['nom' => 'Battement de Cœur du Lion', 'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/5/5e/Spray_Icon_-_Lion%27s_Heartbeat.png'],
                    ['nom' => 'Agent Arctique',            'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/ae/Spray_Icon_-_Arctic_Agent.png'],
                    ['nom' => 'Emblème de Black Widow',     'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/27/Spray_Icon_-_Black_Widow_Emblem.png'],
                ],
                'nameplates' => [
                    ['nom' => 'Suspense de Minuit',        'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/dc/Black_Widow_Full_Nameplate_-_Midnight_Suspense.png'],
                    ['nom' => 'Voile du Tapis Rouge',      'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/0/04/Black_Widow_Full_Nameplate_-_Red_Runway_Veil.png'],
                    ['nom' => 'Veuve Phénix',              'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/d5/Black_Widow_Full_Nameplate_-_Phoenix_Widow.png'],
                    ['nom' => 'Mme Barnes',                'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/6/63/Black_Widow_Full_Nameplate_-_Mrs._Barnes.png'],
                    ['nom' => 'Battement de Cœur du Lion', 'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/a4/Black_Widow_Full_Nameplate_-_Lion%27s_Heartbeat.png'],
                    ['nom' => 'Agent Arctique',            'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/3e/Black_Widow_Full_Nameplate_-_Arctic_Agent.png'],
                ],
            ],

            'Blade' => [
                'vie' => 350,
                'histoire' => "Eric Brooks, alias Blade, se distingue par sa détermination implacable, sa colère profonde et un sens inébranlable des responsabilités. Hybride mi-humain mi-vampire surnommé le « Diurne », il erre en solitaire, mû par une vendetta personnelle contre les vampires depuis que l'un d'eux a tué sa mère à sa naissance. Cet événement a fait de lui un guerrier endurci et stoïque, qui fuit les autres et préfère la solitude aux liens affectifs. Malgré sa nature violente, Blade suit un code moral rigide : il refuse de boire du sang humain et consacre sa vie à défendre l'humanité contre les menaces surnaturelles.\n\nSon sens de la justice est puissant et souvent dur, n'hésitant pas à recourir à la force létale quand il le juge nécessaire. Derrière son attitude froide se cache pourtant un homme rongé par l'empathie et la culpabilité, qui a vu trop de souffrance pour rester indifférent. Il manie un humour pince-sans-rire et sombre, et apprécie même en secret une chanson de Luna Snow qu'il écoute en chassant. Sa personnalité révèle un conflit profond : il combat chaque jour sa part vampirique, résistant à la soif de sang qui accompagne ses pouvoirs. Sous l'armure de la vengeance se cache un homme qui cherche encore la paix et un sentiment d'appartenance.",
                'capacites' => [
                    ['nom' => 'Épée Ancestrale',   'touche' => 'Clic gauche', 'type' => 'Attaque normale', 'degats' => 26,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/21/Ancestral_Sword_Icon.png', 'description' => "Tranche en avant avec l'épée ancestrale de Blade."],
                    ['nom' => 'Fusil du Chasseur', 'touche' => 'Clic gauche', 'type' => 'Attaque normale', 'degats' => 45,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/ec/Hunter%27s_Shotgun_Icon.png', 'description' => "Tire un projectile qui se fragmente en éclats après huit mètres."],
                    ['nom' => 'Linceul Écarlate',  'touche' => 'Clic droit',  'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/d3/Scarlet_Shroud_Icon.png', 'description' => "Pare avec l'épée et devient Imparable, réduisant de 80% les dégâts reçus de face."],
                    ['nom' => 'Ruée du Diurne',    'touche' => 'Maj',         'type' => 'Capacité',        'degats' => 20,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/2e/Daywalker_Dash_Icon.png', 'description' => "Bond en avant ; au sabre il assène une frappe qui réduit les soins, au fusil un tir qui ralentit."],
                    ['nom' => 'Éveil de la Lignée','touche' => 'E',           'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/4e/Bloodline_Awakening_Icon.png', 'description' => "Éveille la lignée dhampir : vitesse, vol de vie et frappes de plus en plus rapides, mais soins réduits."],
                    ['nom' => 'Mille Tranchants',  'touche' => 'Q',           'type' => 'Ultime',          'degats' => 100, 'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/30/Thousand-Fold_Slash_Icon.png', 'description' => "Ultime : charge une ruée puis exécute une rafale de coups d'épée, réduisant les soins des ennemis touchés."],
                ],
                'costumes' => [
                    ['nom' => 'Tranchant de Polarité', 'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/fb/Blade_Polarity_Edge_LoC_Icon.png'],
                    ['nom' => 'Chevalier Blade',       'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/c8/Blade_Blade_Knight_LoC_Icon.png'],
                    ['nom' => 'Repos Réparateur',      'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/22/Blade_Restful_Recovery_LoC_Icon.png'],
                    ['nom' => 'Ombre Étoilée',         'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/9/9a/Blade_Starlit_Shadow_LoC_Icon.png'],
                    ['nom' => 'Tueur de Vampires',     'rarete' => 'Rare',       'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/0/08/Blade_Vampire_Slayer_LoC_Icon.png'],
                ],
                'mvp' => [
                    ['nom' => 'Trancheur de Mondes',  'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/ee/Blade_MVP_-_World_Cutter_Full.gif'],
                    ['nom' => 'Poing au Clair de Lune','rarete' => 'Épique',    'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/26/Blade_MVP_-_Moonlit_Fist_Full.gif'],
                    ['nom' => 'Rêve du Wakanda',      'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/0/00/Blade_MVP_-_Wakanda_Dreaming_Full.gif'],
                    ['nom' => 'Carnage Silencieux',   'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/7e/Blade_MVP_-_Silent_Slaughter_Full.gif'],
                ],
                'emotes' => [
                    ['nom' => 'Une Taillade pour Tout Embraser', 'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/2a/Blade_Emote_-_A_Slash_to_Ignite_All_Full.gif'],
                    ['nom' => 'Nouvel Avatar de Khonshu',        'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/f2/Blade_Emote_-_New_Avatar_of_Khonshu_Full.gif'],
                    ['nom' => 'Au Lit !',                        'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/21/Blade_Emote_-_Bedtime%21_Full.gif'],
                    ['nom' => 'Pas du Chasseur',                 'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/8/82/Blade_Emote_-_Hunter%27s_Shuffle_Full.gif'],
                    ['nom' => 'Prêt au Combat',                  'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/8/8d/Blade_Emote_-_Battle-Ready_Full.gif'],
                    ['nom' => 'Étalage de Muscles',              'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/c0/Blade_Emote_-_Flex_Up_Full.gif'],
                    ['nom' => 'Défaut',                          'rarete' => 'Défaut', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/d7/Blade_Emote_-_DEFAULT_Full.gif'],
                ],
                'sprays' => [
                    ['nom' => 'Tranchant de Polarité', 'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/f5/Spray_Icon_-_Polarity_Edge.png'],
                    ['nom' => 'Chevalier Blade',       'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/7e/Spray_Icon_-_Blade_Knight.png'],
                    ['nom' => 'Repos Réparateur',      'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/d1/Spray_Icon_-_Restful_Recovery.png'],
                    ['nom' => 'Ombre Étoilée',         'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/71/Spray_Icon_-_Starlit_Shadow.png'],
                    ['nom' => 'Tueur de Vampires',     'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/5/5d/Spray_Icon_-_Vampire_Slayer.png'],
                    ['nom' => 'Emblème de Blade',      'rarete' => 'Rare', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/d8/Spray_Icon_-_Blade_Emblem.png'],
                ],
                'nameplates' => [
                    ['nom' => 'Tranchant de Polarité', 'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/39/Blade_Full_Nameplate_-_Polarity_Edge.gif'],
                    ['nom' => 'Chevalier Blade',       'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/44/Blade_Full_Nameplate_-_Blade_Knight.png'],
                    ['nom' => 'Repos Réparateur',      'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/79/Blade_Full_Nameplate_-_Restful_Recovery.png'],
                    ['nom' => 'Ombre Étoilée',         'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/47/Blade_Full_Nameplate_-_Starlit_Shadow.png'],
                    ['nom' => 'Tueur de Vampires',     'rarete' => 'Rare',   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/f8/Blade_Full_Nameplate_-_Vampire_Slayer.png'],
                ],
            ],

            'Captain America' => [
                'vie' => 575,
                'histoire' => "Captain America, considéré comme le premier des Vengeurs et l'homme hors du temps, se distingue par son courage, sa compassion, son patriotisme et sa moralité. Ayant grandi chétif à Brooklyn, Steve a découvert par lui-même que la vraie force, c'est le courage de s'opposer à l'injustice, quelle que soit sa puissance. Doté d'une boussole morale inébranlable, il est profondément altruiste : il fait toujours passer les autres avant lui, prêt à risquer sa sécurité, sa réputation et sa vie pour protéger les plus faibles. On le décrit comme « un homme bon » plutôt qu'un « soldat parfait », fidèle à ses principes en toutes circonstances.\n\nMême après son réveil en 2099, il conserve les valeurs des années 1940. Plongé dans un futur d'empires galactiques et de menaces cosmiques, il reste guidé par un sens du devoir plutôt que par la certitude. Sa personnalité tourne aussi autour de la loyauté et de la protection : intensément fidèle à ses amis, surtout Bucky Barnes qu'il considère comme un frère, sa foi indéfectible en lui a fini par le sauver. Meneur naturel, il inspire les autres par l'exemple plutôt que par les mots, plaçant toujours les vies innocentes et le sacrifice partagé avant sa propre gloire. Sa plus grande force n'est pas son bouclier, mais sa volonté inébranlable de tenir aux côtés des autres.",
                'capacites' => [
                    ['nom' => 'Frappe de la Sentinelle',        'touche' => 'Clic gauche', 'type' => 'Attaque normale', 'degats' => 45,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/7c/Sentinel_Strike_Icon.png', 'description' => "Frappe au corps à corps ; le second coup déclenche un lancer de bouclier qui ricoche."],
                    ['nom' => 'Légende Vivante',                'touche' => 'Clic droit',  'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/9/93/Living_Legend_Icon.png', 'description' => "Lève le bouclier pour bloquer et renvoyer les projectiles dans des directions aléatoires."],
                    ['nom' => "Scie d'Énergie en Vibranium",    'touche' => 'E',           'type' => 'Capacité',        'degats' => 70,  'rechargement' => 6,    'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/d3/Vibranium_Energy_Saw_Icon.png', 'description' => "Lance le bouclier chargé d'énergie, qui frappe les ennemis sur sa trajectoire en ricochant."],
                    ['nom' => 'Élan Meneur',                    'touche' => 'Maj',         'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/b/b6/Leading_Dash_Icon.png', 'description' => "Augmente la vitesse et permet un Saut Intrépide."],
                    ['nom' => 'Ruée de la Liberté',             'touche' => 'F',           'type' => 'Capacité',        'degats' => 30,  'rechargement' => 10,   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/d3/Liberty_Rush_Icon.png', 'description' => "Lève le bouclier et charge en avant en infligeant des dégâts."],
                    ['nom' => 'Frappe du Super-Soldat',         'touche' => 'Espace',      'type' => 'Capacité',        'degats' => 30,  'rechargement' => 12,   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/cf/Super-Soldier_Slam_Icon.png', 'description' => "Plonge du ciel sur la zone visée et projette les ennemis en l'air."],
                    ['nom' => 'Charge de la Liberté',           'touche' => 'Q',           'type' => 'Ultime',          'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/e5/Freedom_Charge_Icon.png', 'description' => "Ultime : accorde points de vie bonus et vitesse à Captain America et aux alliés proches."],
                ],
                'costumes' => [
                    ['nom' => 'Avengers : Infinity War',   'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/71/Captain_America_Avengers_Infinity_War_LoC_Icon.png'],
                    ['nom' => 'Brett Hendrick : La Star',  'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/10/Captain_America_Brett_Hendrick_The_Star_LoC_Icon.png'],
                    ['nom' => 'Capwolf',                   'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/f8/Captain_America_Capwolf_LoC_Icon.png'],
                    ['nom' => 'Capitaine Gladiateur',      'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/2c/Captain_America_Captain_Gladiator_LoC_Icon.png'],
                    ['nom' => 'Capitaine Klyntar',         'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/19/Captain_America_Captain_Klyntar_LoC_Icon.png'],
                    ['nom' => 'Capitaine Maudit',          'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/a3/Captain_America_Cursed_Captain_LoC_Icon.png'],
                    ['nom' => 'Serre Galactique',          'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/8/8f/Captain_America_Galactic_Talon_LoC_Icon.png'],
                    ['nom' => 'Patriote Primal',           'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/b/b8/Captain_America_Primal_Patriot_LoC_Icon.png'],
                    ['nom' => 'Style Étoilé',              'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/0/03/Captain_America_Star_Spangled_Style_LoC_Icon.png'],
                    ["nom" => "Âge d'Or",                  'rarete' => 'Rare',       'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/7d/Captain_America_Golden_Age_LoC_Icon.png'],
                ],
            ],

            'Cloak & Dagger' => [
                'vie' => 275,
                'histoire' => "Duo de justiciers des rues inséparables, Cloak et Dagger forment un « yin et yang » marqué par un passé tragique, un lien profond et des pouvoirs opposés : Cloak contrôle les ténèbres et la téléportation, Dagger crée la lumière et soigne. Tyrone Johnson, alias Cloak, est défini par un fort sens du devoir et une intensité sombre et torturée. Très introspectif, il porte le poids du monde sur ses épaules et lutte constamment contre la « Faim », un vide glacé qui le pousse à absorber la force vitale des autres. Malgré ce fardeau, il garde un sens aigu de la justice et se fait le protecteur dévoué de Dagger.\n\nTandy Bowen, alias Dagger, incarne la résilience et l'espoir, agissant avec une énergie plus impulsive. Là où Cloak est l'ombre, Tandy est la lumière : plus extravertie et expressive, capable de « voir » l'espoir chez les gens. Indépendante et débrouillarde, elle pousse souvent le duo à agir quand la prudence de Cloak mènerait à l'hésitation. Réunis, ils forment une symbiose parfaite quoique tragique : les ténèbres de Cloak ont besoin de la lumière de Dagger, et la lumière de Dagger a besoin des ténèbres de Cloak pour ne pas la submerger. Leur relation est faite de loyauté absolue et de codépendance.",
                'capacites' => [
                    ['nom' => 'Dague de Force-Lumière',  'touche' => 'Clic gauche', 'type' => 'Attaque normale', 'degats' => 18,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/3f/Lightforce_Dagger_Icon.png', 'description' => "Dague de lumière rebondissante qui blesse les ennemis et soigne les alliés proches."],
                    ['nom' => 'Tempête de Dagues',       'touche' => 'Clic droit',  'type' => 'Capacité',        'degats' => null,'rechargement' => 12,   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/13/Dagger_Storm_Icon.png', 'description' => "Crée une zone de soin sur la durée à l'endroit d'impact."],
                    ["nom" => "Étreinte de l'Ombre",     'touche' => 'Maj',         'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/e7/Shadow%27s_Embrace_Icon.png', 'description' => "Bascule vers Cloak."],
                    ['nom' => 'Cape de Force-Obscure',   'touche' => 'Clic gauche', 'type' => 'Attaque normale', 'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/5/56/Darkforce_Cloak_Icon.png', 'description' => "Rayon d'énergie sombre canalisé qui inflige de lourds dégâts continus (Cloak)."],
                    ['nom' => 'Téléportation Obscure',   'touche' => 'Clic droit',  'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/25/Dark_Teleportation_Icon.png', 'description' => "Rend Cloak et les alliés proches invisibles et invulnérables un court instant (Cloak)."],
                    ['nom' => 'Cape de Terreur',         'touche' => 'E',           'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/79/Terror_Cape_Icon.png', 'description' => "Champ obscur qui obstrue la vision des ennemis et les rend vulnérables (Cloak)."],
                    ['nom' => 'Lien Éternel',            'touche' => 'Q',           'type' => 'Ultime',          'degats' => 30,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/11/Eternal_Bond_Icon.png', 'description' => "Ultime : quatre ruées laissant un tapis d'énergie qui soigne les alliés et blesse les ennemis."],
                ],
                'costumes' => [
                    ['nom' => 'Partenaire de Danse', 'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/4d/Cloak_%26_Dagger_Dance_Partner_LoC_Icon.png'],
                    ['nom' => 'Duo Audacieux',       'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/ea/Cloak_%26_Dagger_Daring_Duo_LoC_Icon.png'],
                    ['nom' => 'Pas de Deux Glacé',   'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/ee/Cloak_%26_Dagger_Ice_Pas_de_Deux_LoC_Icon.png'],
                    ['nom' => 'Lien de Polarité',    'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/cb/Cloak_%26_Dagger_Polarity_Bond_LoC_Icon.png'],
                    ['nom' => 'Croissance & Déclin', 'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/6/67/Cloak_%26_Dagger_Growth_%26_Decay_LoC_Icon.png'],
                    ['nom' => 'Duo Crépusculaire',   'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/b/b8/Cloak_%26_Dagger_Twilight_Duo_LoC_Icon.png'],
                ],
            ],

            'Daredevil' => [
                'vie' => 300,
                'histoire' => "Matthew Murdock, alias Daredevil, est un personnage complexe défini par sa double existence. Le jour, c'est un avocat doué et intègre, attaché à la justice dans le cadre de la loi. La nuit, il devient Daredevil, justicier masqué qui combat le crime dans les rues de Hell's Kitchen tout en s'imposant une règle stricte : ne jamais tuer. Ce conflit entre la loi et le vigilantisme illustre l'incertitude morale qui le définit. Aveuglé enfant dans un accident en sauvant un homme, ses autres sens se sont décuplés. La mort de son père, le boxeur Jack Murdock, lui a enseigné que le monde est cruel et injuste, instillant en lui une intensité silencieuse et une propension au sacrifice de soi.\n\nMatt est un homme émotif et réfléchi, qui se débat avec sa foi catholique et un sentiment d'indignité, surtout quand ses actes causent des dommages collatéraux. Sa vie affective tourne autour de Foggy Nelson et Karen Page, son lien avec le monde au-delà du masque. Sa relation la plus volatile est celle avec le Punisher, qui prône une justice expéditive là où Matt croit à la rédemption et à la valeur de la vie. Récemment, après être descendu en enfer affronter la Bête, il a appris auprès de Yinglong à maîtriser ce pouvoir démoniaque sans en être possédé, gagnant un nouveau nom : « Dizang ». Sa résilience, mêlée à une souffrance intérieure brûlante, en fait une figure tragique et héroïque, à la frontière de la lumière et des ténèbres.",
                'capacites' => [
                    ['nom' => 'Coup de Justice',     'touche' => 'Clic gauche', 'type' => 'Attaque normale',  'degats' => 35,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/6/69/Justice_Jab_Icon.png', 'description' => "Coup de matraque vers l'avant qui octroie de la Furie en touchant."],
                    ['nom' => 'Croix Vertueuse',     'touche' => 'Clic gauche', 'type' => 'Attaque spéciale', 'degats' => 50,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/17/Righteous_Cross_Icon.png', 'description' => "Croise les matraques et bondit en avant pour une frappe lourde (activée après certaines capacités)."],
                    ["nom" => "Accroche du Diable",  'touche' => 'Maj',         'type' => 'Capacité',         'degats' => null,'rechargement' => 12,   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/0/05/Devil%27s_Latch_Icon.png', 'description' => "Tire un grappin qui rapproche Daredevil et sa cible, et octroie de la Furie."],
                    ['nom' => 'Furie Infernale',     'touche' => 'E',           'type' => 'Capacité',         'degats' => 25,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/32/Infernal_Fury_Icon.png', 'description' => "Consomme de la Furie pour déclencher la Chaîne du Diable (PV bonus) ou le Jet du Diable (ralentissement)."],
                    ['nom' => 'Poursuite Sonique',   'touche' => 'F',           'type' => 'Capacité',         'degats' => 20,  'rechargement' => 15,   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/d8/Sonic_Pursuit_Icon.png', 'description' => "Marque une cible (vitesse et réduction de dégâts), puis permet de foncer dessus en l'aveuglant."],
                    ['nom' => 'Sens Radar',          'touche' => 'Passif',      'type' => 'Passif',           'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/35/Radar_Sense_Icon.png', 'description' => "Passif : détecte les ennemis et alliés à travers les murs dans un certain rayon."],
                    ['nom' => 'Libérez le Diable',   'touche' => 'Q',           'type' => 'Ultime',           'degats' => 50,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/b/b2/Let_The_Devil_Out_Icon.png', 'description' => "Ultime : crée un dôme qui inflige des dégâts croissants et aveugle les ennemis dans le champ de vision."],
                ],
                'costumes' => [
                    ['nom' => 'Daredevil : Born Again Saison 2', 'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/da/Daredevil_Daredevil_Born_Again_Season_2_LoC_Icon.png'],
                    ['nom' => 'Devil 2099',                      'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/7b/Daredevil_Devil_2099_LoC_Icon.png'],
                    ['nom' => 'Pas Daredevil',                   'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/ac/Daredevil_Not_Daredevil_LoC_Icon.png'],
                    ["nom" => "Départ dans l'Ombre",             'rarete' => 'Épique', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/4e/Daredevil_Shadowed_Start_LoC_Icon.png'],
                ],
            ],

            'Docteur Strange' => [
                'vie' => 575,
                'histoire' => "Le Docteur Stephen Strange est un personnage complexe dont la personnalité évolue radicalement. Au départ, il est présenté comme arrogant, têtu et égocentrique : un brillant neurochirurgien grisé par son intelligence et son talent, dont l'assurance frôle la suffisance. Cet égoïsme sous-tend sa conduite initiale, obsédé par le contrôle, la réussite et la reconnaissance, avec peu d'empathie hors de son domaine. Tout bascule après un terrible accident de voiture qui met fin à sa carrière de chirurgien et le laisse brisé.\n\nSa personnalité change après son arrivée à Kamar-Taj. Privé de son identité et de son but, il s'ouvre à de nouvelles voies. Son apprentissage des arts mystiques auprès de l'Ancien et de Wong lui enseigne l'humilité, la patience et l'altruisme. Devenu protecteur de la réalité et Sorcier Suprême, il garde son intellect aiguisé et son humour, mais devient plus mesuré et contemplatif, conscient que ses actes ont des conséquences considérables. Mentor, stratège et gardien du multivers, il forme la nouvelle génération de sorciers comme Magik et entretient un respect mutuel avec la Sorcière Rouge. Mélange de génie et d'humilité, d'ego et de compassion, il est profondément attaché à la préservation des mondes naturel et surnaturel.",
                'capacites' => [
                    ['nom' => 'Dagues de Denak',       'touche' => 'Clic gauche', 'type' => 'Attaque normale', 'degats' => 16,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/42/Daggers_of_Denak_Icon.png', 'description' => "Projette des dagues mystiques vers l'avant."],
                    ['nom' => 'Bouclier du Séraphin',  'touche' => 'Clic droit',  'type' => 'Capacité',        'degats' => null,'rechargement' => 3,    'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/47/Shield_of_the_Seraphim_Icon.png', 'description' => "Projette une large barrière qui absorbe les projectiles."],
                    ['nom' => 'Cape de Lévitation',    'touche' => 'Maj',         'type' => 'Capacité',        'degats' => null,'rechargement' => 12,   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/d5/Cloak_of_Levitation_Icon.png', 'description' => "S'élève puis entre dans un bref état de vol soutenu."],
                    ['nom' => 'Maelström de la Folie', 'touche' => 'E',           'type' => 'Capacité',        'degats' => null,'rechargement' => 6,    'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/77/Maelstrom_of_Madness_Icon.png', 'description' => "Libère la Magie Noire accumulée pour blesser les ennemis proches."],
                    ['nom' => 'Pentagramme de Farallah','touche' => 'F',          'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/6/64/Pentagram_of_Farallah_Icon.png', 'description' => "Ouvre deux portails entre deux endroits, traversables par tous."],
                    ['nom' => 'Prix de la Magie',      'touche' => 'Passif',      'type' => 'Passif',          'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/1b/Price_of_Magic_Icon.png', 'description' => "Passif : accumule de la Magie Noire à chaque coup ; au maximum trop longtemps, il subit l'Anti-Soin."],
                    ["nom" => "Œil d'Agamotto",        'touche' => 'Q',           'type' => 'Ultime',          'degats' => 60,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/8/87/Eye_of_Agamotto_Icon.png', 'description' => "Ultime : sépare l'âme des ennemis proches ; les dégâts infligés à l'âme se répercutent sur le corps."],
                ],
                'costumes' => [
                    ['nom' => 'Allure de Bleeker Street',                 'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/9/92/Doctor_Strange_Bleeker_Street_Strut_LoC_Icon.png'],
                    ['nom' => 'Doctor Strange dans le Multivers de la Folie', 'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/14/Doctor_Strange_Doctor_Strange_in_the_Multiverse_of_Madness_LoC_Icon.png'],
                    ['nom' => 'Sorcier Immortel',                         'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/d3/Doctor_Strange_Sorcerer_Immortal_LoC_Icon.png'],
                    ['nom' => 'Dieu de la Magie',                         'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/cc/Doctor_Strange_God_of_Magic_LoC_Icon.png'],
                    ['nom' => 'Le Vieux Strange',                         'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/19/Doctor_Strange_Old_Man_Strange_LoC_Icon.png'],
                    ['nom' => 'Sorcier Fantôme',                          'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/e2/Doctor_Strange_Phantom_Sorcerer_LoC_Icon.png'],
                    ['nom' => 'Sorcier Suprême de la Galaxie',            'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/b/b1/Doctor_Strange_Sorcerer_Supreme_of_the_Galaxy_LoC_Icon.png'],
                    ['nom' => 'Stephen Sanders : Le Docteur',             'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/ee/Doctor_Strange_Stephen_Sanders_The_Doctor_LoC_Icon.png'],
                ],
            ],

            'Emma Frost' => [
                'vie' => 600,
                'histoire' => "La Reine Blanche se distingue par son charme, son ego, son intelligence, son élégance et sa ruse, se jugeant supérieure par sa fortune, son apparence et ses pouvoirs mutants. Emma possède un intellect acéré, un tempérament froid et une volonté de fer ; assurée, indépendante et dominatrice, elle agit à ses propres conditions et n'hésite pas à défier l'autorité, y compris celle du Professeur X ou de Magneto. Elle impose une présence forte et exige le respect, sinon la crainte, rarement gouvernée par ses émotions tout en cachant des sentiments profonds.\n\nSous ce vernis glacial et ses méthodes pragmatiques, Emma peut faire preuve de loyauté, de protection et d'un véritable élan héroïque, notamment dans son désir de préserver les mutants au sein du Conseil Tranquille de Krakoa. Fondatrice du Gala Hellfire, elle voue un culte à la mode et utilise sa forme de diamant autant pour se protéger que pour s'exprimer. Elle a un côté profondément protecteur et nourricier, surtout envers ses élèves, les enfants mutants et ceux qu'elle considère comme sa famille — y compris l'adorable Jeff, qu'elle traite comme son fils. Ses relations avec Cyclope ou Iron Man révèlent une sensibilité souvent masquée par le sarcasme. Mélange de génie, d'ego et de compassion, Emma est une figure aussi élégante que complexe.",
                'capacites' => [
                    ['nom' => 'Impulsion Télépathique', 'touche' => 'Clic gauche', 'type' => 'Attaque normale', 'degats' => 70,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/4c/Telepathic_Pulse_Icon.png', 'description' => "Faisceau psionique à moyenne portée dont les dégâts augmentent avec la durée."],
                    ["nom" => "Égide de l'Esprit",      'touche' => 'Clic droit',  'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/dd/Mind%27s_Aegis_Icon.png', 'description' => "Crée un bouclier de diamant déployable qui protège les alliés."],
                    ['nom' => 'Lance Psychique',        'touche' => 'E',           'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/0/06/Psychic_Spear_Icon.png', 'description' => "Projectile psionique : les dégâts infligés à la cristallisation de l'esprit se répercutent sur l'ennemi."],
                    ['nom' => 'Forme de Diamant',       'touche' => 'Maj',         'type' => 'Capacité',        'degats' => null,'rechargement' => 15,   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/39/Diamond_Form_Icon.png', 'description' => "Se transforme en diamant : réduction de dégâts et statut Imparable, mais perte des pouvoirs psychiques."],
                    ['nom' => 'Broyeur de Carbone',     'touche' => 'Maj',         'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/8/86/Carbon_Crush_Icon.png', 'description' => "(Forme de Diamant) Fonce, saisit un ennemi à la gorge et le projette au sol en l'étourdissant."],
                    ['nom' => 'Coup de Pied de Cristal','touche' => 'E',           'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/a2/Crystal_Kick_Icon.png', 'description' => "(Forme de Diamant) Repousse un ennemi avec de lourds dégâts, accrus s'il percute un mur."],
                    ['nom' => 'Séduction Psionique',    'touche' => 'Q',           'type' => 'Ultime',          'degats' => 80,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/ff/Psionic_Seduction_Icon.png', 'description' => "Ultime : projette un cône d'ondes psioniques qui blessent puis contrôlent l'esprit des ennemis."],
                ],
                'costumes' => [
                    ['nom' => 'Protocole Hellfire',          'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/b/bb/Emma_Frost_Hellfire_Protocol_LoC_Icon.png'],
                    ['nom' => 'Reine Noire des Maraudeurs',  'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/1e/Emma_Frost_Black_Queen_of_the_Marauders_LoC_Icon.png'],
                    ['nom' => 'Glamour de Gala',             'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/6/69/Emma_Frost_Gala_Glam_LoC_Icon.png'],
                    ['nom' => 'Diamant Phénix',              'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/4e/Emma_Frost_Phoenix_Diamond_LoC_Icon.png'],
                    ['nom' => 'Reine de Diamant',            'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/c5/Emma_Frost_Queen_of_Diamonds_LoC_Icon.png'],
                    ['nom' => 'X-Révolution',                'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/f/fe/Emma_Frost_X-Revolution_LoC_Icon.png'],
                ],
            ],

            'Gambit' => [
                'vie' => 250,
                'histoire' => "Remy LeBeau, le mutant voleur surnommé Gambit, est un natif de Louisiane dont la personnalité mêle charme suave, mystère et complexité morale comme peu d'autres X-Men. Cajun beau parleur au charisme désarmant, il use d'humour, de flirt et de répartie ; figure roublarde dotée d'une vraie boussole morale qui entre parfois en conflit avec son passé criminel, il se bat toujours pour ce qu'il croit juste. Sous la surface, Remy est sur ses gardes : son enfance dans les rues de la Nouvelle-Orléans et son appartenance aux Guildes des Voleurs et des Assassins l'ont rendu réticent à se dévoiler, masquant ses peurs et ses regrets sous une assurance espiègle.\n\nMais Gambit est loin d'être froid : il est farouchement loyal envers ceux qu'il laisse entrer dans son cercle. Sa relation avec Malicia, l'une des plus iconiques de Marvel, révèle sa profondeur émotionnelle : il l'aime passionnément et sans rien attendre, prêt à endurer la solitude pour lui laisser l'espace dont elle a besoin. Joueur dans l'âme, il croit au risque même quand il fait mal. Avec Wolverine, il partage un respect réticent de frères d'armes ; avec Storm, une amitié sincère ; et avec Rocket, un duo explosif d'amateurs de larcins. Voleur de métier qui veut sincèrement faire le bien, Gambit se définit non par la perfection mais par le dévouement, la passion et le charme de celui qui a toujours un coup d'avance.",
                'capacites' => [
                    ['nom' => 'Cartes Cinétiques',                'touche' => 'Clic gauche', 'type' => 'Attaque normale', 'degats' => 20,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/1/17/Kinetic_Cards_Icon.png', 'description' => "Lance trois cartes chargées d'énergie qui explosent à l'impact, blessant les ennemis et soignant les alliés."],
                    ['nom' => 'Frappe du Bayou',                  'touche' => 'Clic droit',  'type' => 'Capacité',        'degats' => 60,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/41/Bayou_Bash_Icon.png', 'description' => "Onde de choc autour de Gambit qui blesse les ennemis et soigne les alliés proches (2 charges)."],
                    ['nom' => 'Charge Cajun',                     'touche' => 'Maj',         'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/b/b6/Cajun_Charge_Icon.png', 'description' => "Courte ruée avec le bâton, qui peut enchaîner sur un Grand Impact."],
                    ['nom' => 'Cœurs Guérisseurs',                'touche' => 'E',           'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/0/02/Healing_Hearts_Icon.png', 'description' => "Consomme une charge de Tour de Passe-passe pour se soigner et activer la pioche de soin."],
                    ['nom' => 'Piques Brisés',                    'touche' => 'F',           'type' => 'Capacité',        'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/6/68/Breaking_Spades_Icon.png', 'description' => "Consomme une charge de Tour de Passe-passe pour gagner un bonus de dégâts et activer la pioche offensive."],
                    ['nom' => 'Quinte Flush Royale Déchaînée',    'touche' => 'Q',           'type' => 'Ultime',          'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/cf/Ragin%27_Royal_Flush_Icon.png', 'description' => "Ultime : invoque des As sur les alliés, soignant, purifiant et accordant vitesse et dégâts bonus."],
                ],
                'costumes' => [
                    ['nom' => 'Mr. X',                            'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/2d/Gambit_Mr._X_LoC_Icon.png'],
                    ['nom' => 'As Enchanteur',                    'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/9/95/Gambit_Alluring_Ace_LoC_Icon.png'],
                    ['nom' => 'Briseur de Barrière',              'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/8/86/Gambit_Barrier_Buster_LoC_Icon.png'],
                    ['nom' => 'Maître de la Guilde des Voleurs',  'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/5/51/Gambit_Thieves_Guildmaster_LoC_Icon.png'],
                ],
            ],

            'Groot' => [
                'vie' => 700,
                'histoire' => "Groot allie une innocence enfantine et délicate à une intuition profonde et instinctive. Malgré son vocabulaire réduit à « Je s'appelle Groot », il exprime une palette d'émotions — curiosité immense, joie, chagrin, affection. Naturellement doux et empathique, il tisse des liens discrets mais profonds avec ses amis, en particulier son complice Rocket. Il ne cherche ni les projecteurs ni le commandement : il observe, écoute et réagit avec une sincérité émotionnelle authentique. Seuls quelques proches le comprennent, comme ses Gardiens de la Galaxie, et plus encore les héros télépathes comme Emma Frost ou Phoenix.\n\nMalgré son peu de mots, il comprend bien plus qu'on ne l'imagine et compense par un cœur plus grand que lui et une fiabilité aussi solide que son écorce. Amoureux de la nature, il fait preuve de bonté envers toute vie, jusqu'aux plantes du dangereux Klyntar. Doux par nature, il peut toutefois se montrer violent et farouche si l'on s'en prend à ceux qu'il aime. Sa personnalité grandit en même temps que son corps, mais ses valeurs restent constantes : il est bienveillant, protecteur et croit en la famille choisie. Groot incarne l'idée que la force n'a pas besoin de grands discours : elle grandit en silence, comme un arbre, et tient bon quand tout vacille.",
                'capacites' => [
                    ['nom' => 'Frappe de Lianes',     'touche' => 'Clic gauche', 'type' => 'Attaque normale', 'degats' => 65,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/24/Vine_Strike_Icon.png', 'description' => "Étend les bras de Groot pour frapper les ennemis à longue portée."],
                    ['nom' => 'Bombe de Spores',      'touche' => 'Clic droit',  'type' => 'Capacité',        'degats' => 55,  'rechargement' => 6,    'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/7c/Spore_Bomb_Icon.png', 'description' => "Projectile explosif qui se divise en plusieurs petites spores explosives."],
                    ["nom" => "Mur d'Épines",         'touche' => 'Maj',         'type' => 'Capacité',        'degats' => 60,  'rechargement' => 6,    'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/8/8d/Thornlash_Wall_Icon.png', 'description' => "Fait pousser un mur d'épines qui, éveillé, frappe les ennemis proches (jusqu'à 3 murs)."],
                    ['nom' => 'Mur de Bois de Fer',   'touche' => 'E',           'type' => 'Capacité',        'degats' => null,'rechargement' => 12,   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/3b/Ironwood_Wall_Icon.png', 'description' => "Fait pousser un robuste mur (600 PV) qui, éveillé, octroie des points de vie bonus à Groot."],
                    ['nom' => 'Flore Furieuse',       'touche' => 'V',           'type' => 'Attaque spéciale','degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/cd/Furious_Flora_Icon.png', 'description' => "Combo de bras dont le troisième coup projette légèrement l'ennemi en l'air."],
                    ['nom' => 'Colosse Végétal',      'touche' => 'Passif',      'type' => 'Passif',          'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/d9/Flora_Colossus_Icon.png', 'description' => "Passif : les murs proches de Groot s'éveillent et activent un effet supplémentaire."],
                    ['nom' => 'Prison Étouffante',    'touche' => 'Q',           'type' => 'Ultime',          'degats' => 70,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/d/de/Strangling_Prison_Icon.png', 'description' => "Ultime : des lianes attirent et emprisonnent les ennemis tout en infligeant des dégâts."],
                ],
                'costumes' => [
                    ['nom' => 'Méca-Flore',                    'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/c2/Groot_Mecha-Flora_LoC_Icon.png'],
                    ['nom' => 'Yggroot',                       'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/c9/Groot_Yggroot_LoC_Icon.png'],
                    ['nom' => 'Gardiens de la Galaxie Vol. 3', 'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/c/c1/Groot_Guardians_of_the_Galaxy_Vol.3_LoC_Icon.png'],
                    ['nom' => 'Bonheur des Fêtes',             'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/e/e6/Groot_Holiday_Happiness_LoC_Icon.png'],
                    ['nom' => 'Grand Copain',                  'rarete' => 'Rare',       'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/7/72/Groot_Big_Buddy_LoC_Icon.png'],
                    ['nom' => 'Voyageur Sculpté',              'rarete' => 'Rare',       'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/2/2c/Groot_Carved_Traveler_LoC_Icon.png'],
                    ['nom' => 'Flore Symbiote',                'rarete' => 'Rare',       'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/46/Groot_Symbiote_Flora_LoC_Icon.png'],
                ],
            ],

            'Hawkeye' => [
                'vie' => 250,
                'histoire' => "Clint Barton, alias Hawkeye, garde son calme en pleine crise et excelle à improviser pour se sortir des situations délicates. Sa personnalité mêle humour pince-sans-rire, fiabilité et résilience tranquille. Dépourvu de super-pouvoirs, il n'en est que plus attachant : on le voit comme le membre le plus terre-à-terre des Avengers, le cœur humain et l'ancre d'un groupe de dieux, super-soldats et génies. Sous son flegme caustique se cachent un fort sens du devoir et une douleur réelle, lui qui a connu la perte et les côtés sombres de l'héroïsme.\n\nAgent de S.H.I.E.L.D. habile et débrouillard, Clint mise sur le savoir-faire plutôt que sur la force brute, désamorçant les situations difficiles par le sarcasme. Profondément dévoué à ses coéquipiers et à ceux qu'il aime, il sert souvent de noyau émotionnel à l'équipe, soutien discret et repère de normalité. Sa relation étroite avec Natasha et son attitude protectrice envers de jeunes héros comme Kate Bishop révèlent sa loyauté et son côté guide. Têtu, impulsif et sujet à la culpabilité — notamment durant son passage en tant que Ronin —, il reste inébranlable dans sa volonté de faire ce qui est juste. Sa personnalité se définit autant par son adresse au tir que par sa ténacité et sa façon de toujours répondre présent, quoi qu'il en coûte.",
                'capacites' => [
                    ['nom' => 'Flèche Perforante',      'touche' => 'Clic gauche', 'type' => 'Attaque normale', 'degats' => 70,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/9/9c/Piercing_Arrow_Icon.png', 'description' => "Flèche puissante qui peut être chargée ; les dégâts augmentent avec la charge et la concentration."],
                    ['nom' => 'Flèche Explosive',       'touche' => 'Clic gauche', 'type' => 'Attaque normale', 'degats' => 16,  'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/a/a4/Blast_Arrow_Icon.png', 'description' => "Tire trois flèches explosives en éventail (3 charges)."],
                    ['nom' => 'Taillade en Croissant',  'touche' => 'Maj',         'type' => 'Capacité',        'degats' => 40,  'rechargement' => 12,   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/b/b7/Crescent_Slash_Icon.png', 'description' => "Dégaine un katana et frappe vers l'avant, projetant les ennemis en l'air."],
                    ['nom' => 'Flèche Hypersonique',    'touche' => 'E',           'type' => 'Capacité',        'degats' => 55,  'rechargement' => 12,   'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/8/87/Hypersonic_Arrow_Icon.png', 'description' => "Flèche rapide qui inflige deux instances de dégâts, ralentit et fait tomber les héros volants."],
                    ['nom' => 'Taillade du Ronin',      'touche' => 'V',           'type' => 'Attaque spéciale','degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/3d/Ronin_Slash_Icon.png', 'description' => "Frappe au wakizashi qui dévie les projectiles directs ennemis."],
                    ["nom" => "Concentration de l'Archer",'touche' => 'Passif',    'type' => 'Passif',          'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/0/0b/Archer%27s_Focus_Icon.png', 'description' => "Passif : viser un ennemi augmente les dégâts de la Flèche Perforante."],
                    ['nom' => 'Vision du Chasseur',     'touche' => 'Q',           'type' => 'Ultime',          'degats' => null,'rechargement' => null, 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/3d/Hunter%27s_Sight_Icon.png', 'description' => "Ultime : crée des images rémanentes des ennemis ; les dégâts qui leur sont infligés sont reportés sur les cibles."],
                ],
                'costumes' => [
                    ['nom' => 'Ronin',            'rarete' => 'Légendaire', 'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/3/3f/Hawkeye_Ronin_LoC_Icon.png'],
                    ['nom' => 'Flèche Binaire',   'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/9/93/Hawkeye_Binary_Arrow_LoC_Icon.png'],
                    ['nom' => 'Chute Libre',      'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/6/68/Hawkeye_Freefall_LoC_Icon.png'],
                    ['nom' => 'Crocs Galactiques','rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/5/5f/Hawkeye_Galactic_Fangs_LoC_Icon.png'],
                    ['nom' => 'Le Vieux Hawkeye', 'rarete' => 'Épique',     'image' => 'https://static.wikia.nocookie.net/marvel-rivals/images/4/42/Hawkeye_Old_Man_Hawkeye_LoC_Icon.png'],
                ],
            ],

        ];

        foreach ($data as $nomPerso => $infos) {
            $personnage = Personnage::where('nom', $nomPerso)->first();

            if (!$personnage) {
                $this->command->warn("Personnage introuvable : {$nomPerso} (ignoré).");
                continue;
            }

            // Histoire (Personality) en français + points de vie officiels
            if (!empty($infos['histoire'])) {
                $personnage->description = $infos['histoire'];
            }
            if (!empty($infos['vie'])) {
                $personnage->vie = $infos['vie'];
            }
            $personnage->save();

            // Réinitialise les cosmétiques de ce personnage (évite les doublons
            // lorsque les noms changent, ex. traduction en français).
            $personnage->costumes()->delete();
            $personnage->animations()->delete();
            $personnage->cosmetiques()->delete();
            $personnage->capacites()->delete();

            // Capacités (hors team-up) — caractéristiques basiques uniquement
            foreach ($infos['capacites'] ?? [] as $cap) {
                $personnage->capacites()->create($cap);
            }

            // Costumes
            foreach ($infos['costumes'] ?? [] as $c) {
                $personnage->costumes()->updateOrCreate(
                    ['nom' => $c['nom']],
                    ['rarete' => $c['rarete'], 'image' => $c['image'], 'video' => null]
                );
            }

            // Animations MVP
            foreach ($infos['mvp'] ?? [] as $a) {
                $personnage->animations()->updateOrCreate(
                    ['nom' => $a['nom']],
                    ['rarete' => $a['rarete'], 'image' => $a['image'], 'video' => null]
                );
            }

            // Cosmétiques (emotes / sprays / nameplates)
            $types = ['emotes' => 'emote', 'sprays' => 'spray', 'nameplates' => 'nameplate'];
            foreach ($types as $cle => $type) {
                foreach ($infos[$cle] ?? [] as $item) {
                    $personnage->cosmetiques()->updateOrCreate(
                        ['type' => $type, 'nom' => $item['nom']],
                        ['rarete' => $item['rarete'], 'image' => $item['image']]
                    );
                }
            }
        }
    }
}

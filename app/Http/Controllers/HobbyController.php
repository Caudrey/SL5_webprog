<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbyController extends Controller
{
    private $arrHobby = [
        [
            'name' => 'The Lady I Served Became a Master',
            'rarity' => 'High',
            'price' => '50.000',
            'type' => 'Webtoon',
            'desc' => "When Sua wakes up inside the world of her favorite novel as the character of Blair, she is determined to help the female protagonist, Chloe, get through the darkest period of her life. For years, Chloe has had to endure discrimination and abuse for being an illegitimate child. Blair becomes her maid and confidante, and the two form a special friendship. But Chloe turns out to be quite a different character than the one described in the book. She wields black magic, sends Blair to fetch her mysterious potions, and seems totally uninterested in any of the male lead candidates. Then one day, a handsome man who looks an awful lot like Chloe shows up at Blair’s doorstep. Could it be…the lady she used to serve?! All bets are off as plot twist after plot twist unravels in this unpredictable tale of love and redemption.",
            'img' => '1.jpeg'
        ],
        [
            'name' => 'I’m A Villainess, But I Picked Up the Male Lead',
            'rarity' => 'High',
            'price' => '50.000',
            'type' => 'Manhwa',
            'desc' => "I've possessed a character in a novel, Countess Eduet . . . to be exact, I've possessed the villain who stole the male lead's heart and sold it to a neighbouring country! I tried everything to avoid him until I could return the heart, only to find him beat up in a back alley. Just this time, and only this time, I’ll help him and pretend I don’t know anything. However, since this is the nth time I've run into him, I think it would be better to just leave the male lead there next time. I’d rather just be nice to him for once, pay my debt, and forget everything. But first, I have to save the male lead!",
            'img' => '2.jpeg'
        ],
        [
            'name' => 'The Most Powerful Characters In The World Are Obsessed With Me',
            'rarity' => 'High',
            'price' => '50.000',
            'type' => 'Novel',
            'desc' => "One day when she was thirteen years old, while chewing bread as a snack, Dalia Pesteros suddenly remembered her past life. This is an impoverished otome game world where the main characters go crazy, and she was born as the sister of the worst villain in the future!

            There is no solution at this rate. The family will be exterminated, and I will be thrown away. So, no matter what, I must get out of this family as soon as possible!

            ‘Now that it’s like this, I need to lower their guard and run away.’

            In order to get rid of the relatives who aim for the family and the sly emperor, it’s better to be in good favor with my brother-

            “I want to dance with Dalia. What’s the problem?”

            “I’m sorry, but my sister is shy.”

            “Dalia said I was her favorite!”

            Somehow, it’s not only my brother that I tamed, but all the strongest characters in this world are obsessed with me!",
            'img' => '3.jpg'
        ],
        [
            'name' => 'A Painting of the Villainess as a Young Lady',
            'rarity' => 'High',
            'price' => '50.000',
            'type' => 'Novel',
            'desc' => "A villainess known by all as a wicked woman who has done all sorts of evil deeds—Ducal Lady Violet.
            She regained her memories of her previous life after she fell into a lake and almost died.
            The very moment she woke up, she immediately visited her father, Duke Everett, and asked one thing.

            “Please confine me to the annex.”

            And so, she imprisoned herself there.
            Now that Violet was secluded away from the world’s criticism and reproach,
            She immersed herself in her previous life’s memories and started painting them.

            “What the hell are you up to this time?”

            Everyone was suspicious of just what she might be scheming.
            However, the misunderstandings surrounding her gradually got resolved one at a time…",
            'img' => '4.jpg'
        ],
        [
            'name' => 'The S-Classes That I Raised',
            'rarity' => 'Medium',
            'price' => '30.000',
            'type' => 'Novel',
            'desc' => "He was an F-rank Hunter. To top it off, he was a useless F-rank loser of a big brother who dragged down his incredible younger brother.

            While he carelessly lived out his messed-up life, he ultimately took his younger brother’s life.

            He regressed back in time with the title, Perfect Caregiver.

            “Okay, this time, let’s lay low and take care of the talented ones instead.” He thought.

            But those S-ranks are acting a little strange.",
            'img' => '5.png'
        ],
        [
            'name' => 'The Max Level Heroine',
            'rarity' => 'Medium',
            'price' => '30.000',
            'type' => 'Manhwa',
            'desc' => "Joo Seyoung was a top player in the VR game Arcadia Online, but her life is turned upside down when she accidentally accepts a quest that sends her into a mysterious fantasy world. There, she conquers a dangerous maze and learns the truth of why she was summoned: to find and destroy the seven cursed divine items to stop the demon god's return. As completing this task is her only way home, Seyoung agrees to save the world, but can this max level heroine conquer the hellish perils that lie ahead?",
            'img' => '6.jpeg'
        ],
        [
            'name' => 'I Became The Male Lead’s Female Friend',
            'rarity' => 'Medium',
            'price' => '30.000',
            'type' => 'Novel',
            'desc' => "She becomes interrupted by love, a jealousy inducer, and the female friend of the male lead.

            And in addition, she even has an unrequited love with the male lead. It was ruined.

            As long as this is the case, let’s just become friends!

            It was nice to have the first meeting with such a young male lead…

            “Hello, Bouser Youngae (Polite way for noble’s daughter)”

            “Uwa!!” You were mistaken for a girl and you cried?

            Fortunately, she managed to resolve the misunderstanding and become close friends. However, the male lead in his childhood is more shy and soft-hearted than I thought.

            Eventually, she became attached to the male lead and decided to become a real friend.

            However, due to the disturbance of the male lead father and the war broke out, we had to be separated for a long time, I thought I could barely meet him again and stay the same as before but….

            “Your eyes must have dropped a lot since I didn’t see you. Princess Averine!”

            What’s wrong with him again?!

            It’s not just that. Rather than getting along, he keeps get into trouble when he has a chance, and most of all, he even bothers my love business!!",
            'img' => '7.jpg'
        ],
        [
            'name' => 'A Very Normal Ending',
            'rarity' => 'Medium',
            'price' => '30.000',
            'type' => 'Manhwa',
            'desc' => "The matchmaker meets her match! Sayoung Lee is a travel consultant who helps others find their soulmates while they're visiting new places. Though she has no interest in finding a love of her own, her whole world is turned upside-down when the mysterious and hunky Seowan shows up in this riotous rom-com!",
            'img' => '8.jpeg'
        ],
        [
            'name' => 'June Peach',
            'rarity' => 'Medium',
            'price' => '30.000',
            'type' => 'Webtoon',
            'desc' => "After two rebirths and two miserable, failed marriages, Leah Riveron vowed to never wed again. Despite this, she can’t get one man, the handsome duke Julian Raenal, off her mind. Though he ignored her in the past, this time, Leah throws caution to the wind and tells him every detail of her past lives. He won’t be interested anyway, right? But rather than repelling him, her refreshing honesty ends up charming him! Now, with Julian hooked, will Leah’s plan of a marriage-free life go as planned?",
            'img' => '9.jpeg'
        ],
        [
            'name' => 'Rebirth of the Film Emperor’s Beloved Wife',
            'rarity' => 'Medium',
            'price' => '30.000',
            'type' => 'Novel',
            'desc' => "Su Yanyi: The president of Resplendent Entertainment, the legendary Entertainment Queen, and the support pillar every artist wanted.

            She lost everything to one scheme, and only then did she realize that the man she had always treated with coldness and indifference was actually deeply in love with her. At the end of her life, she was left with endless, irreparable regret.

            “If I am given another life, I will make every single person who owed me pay me back a hundredfold, and I will do everything within my power to ensure you a safe and happy life!”

            Maybe her persistence was simply too impressive, because in the blink of an eye, she returned to a time three years ago and obtained a very special System—The Virtuous Wife System.

            Was this telling her that she had been the Entertainment Queen for too long, so she should try something new and become a virtuous wife instead?

            Qin Jiran: The new generation Film Emperor, handsome and domineering, a lofty male god in the eyes of countless fans.

            In his entire life, he only ever loved Su Yanyi. It was a pity that she did not love him back, and even after three years of marriage together, it was all still just a contractual transaction to her.

            “Yanyi, do we have to divorce?” Hidden within the man’s cold, hard expression was deep sorrow and despair.

            In both her past life and her present life, their fates intertwined. Su Yanyi was reborn back to the day they were supposed to divorce.

            Will she adhere to the choice she had made in her past life, or will she embark on a different path?

            With the help of the Virtuous Wife System, the dense and stoic Su Yanyi set out to pamper her oblivious husband, stumbling over her own inexperience as she tried to convince him that no, he was not having auditory hallucinations, and no, she was not feeling ill!

            Just, why was the first task —make him smile genuinely ten times— already so difficult?",
            'img' => '10.jpg'
        ],
        [
            'name' => 'Saving Unpermitted',
            'rarity' => 'Low',
            'price' => '10.000',
            'type' => 'Novel',
            'desc' => "The world’s No.1 professional player in [Erosion], ‘Undead Legend’ Shu Jun, was preparing to retire.

            Finally returning to reality from virtual reality, Mr. Shu was in great spirits and even planned to confess his feelings.

            [See You Tomorrow]: After we win the finals, let’s meet. I will come to find you.
            [Haze]: Okay.
            With Shu Jun’s countless calculations, his strategy didn’t get knocked out, his commands didn’t get knocked out and his own team also didn’t get knocked out. But, the world decided to knock him out instead.

            When he opened his eyes again, he had become the game’s most dangerous monster.

            Also, this isn’t an E-sports novel.",
            'img' => '11.jpg'
        ],
        [
            'name' => 'Busy Farming in The Last Days',
            'rarity' => 'Low',
            'price' => '10.000',
            'type' => 'Novel',
            'desc' => "Ji Cha was fortunate enough to return to two months before the end of the world.

            There was only one thought burning in the mind of Ji Cha, who was hungry and afraid, farming, farming, farming!!! Plant a handful of greens first, then peanuts, peppers, and in autumn, we can harvest… eh? A boyfriend?",
            'img' => '12.jpg'
        ],
        [
            'name' => 'Romance is Dead',
            'rarity' => 'Low',
            'price' => '10.000',
            'type' => 'Webtoon',
            'desc' => "Luce Granzia was a Cinderella that almost was. But just a night before the wedding, her engagement is broken off and she finds herself guilty for something she hasn't done. Her life plummets, and Luce finds a job at the national laboratory in order to pay back a mountain of debt. Five years later, she's build for herself a new life, new relationships—but with the crown prince's orders, she must head back into high society.",
            'img' => '13.jpeg'
        ],
        [
            'name' => 'The Girl of the Black Lotus',
            'rarity' => 'Low',
            'price' => '10.000',
            'type' => 'Manhua',
            'desc' => "I just had to be a keyboard warrior…! I read a sucky novel and wrote a scathing online review only to then find myself in the body of the story’s most despicable side character, the third female lead. Not only do I need to destroy the relationship between the main pair, but I’m on a mission to charm this bad-boy demon hunter, known as “The Black Lotus,” to complete my quest. We couldn’t be more different, but I’ll use every tactic I can to claim his love. I’m the one with the book in my hands after all, so this should be easy… right?",
            'img' => '14.jpeg'
        ],
        [
            'name' => 'The Supporting Male Character Just Wants to Be a Tool Man',
            'rarity' => 'Low',
            'price' => '10.000',
            'type' => 'Novel',
            'desc' => "Shen QingShu, 22, died in an accident. His biggest regret before his death was that he’d been single all his life. He obviously wasn’t a monk, but he’d never eaten meat.

            Then, when he opened his eyes, he saw a handsome, self-assured man standing before him. The handsome man parted his thin lips slightly and asked, “Wanna have a one-night stand?”

            Shen QingShu didn’t hesitate at all. “Let’s do it! Twice!”

            The next morning, Shen QingShu woke up aching all over. Only then did he discover he’d transmigrated into a book. The handsome guy beside him who’d gone two rounds with him was the protagonist gong, Han Cheng, the second son of the Han Group.

            And the original owner of this body was just a disliked, death-seeking cannon fodder.

            Shen QingShu: …Well, this is f*cking awkward.

            But Shen QingShu didn’t panic. Anyway, he was just a cannon fodder. He figured they’d part in a few days

            He knew he was a tool man, a character who only existed to develop the plot.

            -Half a year later-

            Shen QingShu looked at the man next to him and wondered: It’s been more than six months. Why hasn’t he left already?

            Until the day he saw the protagonist shou and Han Cheng meet by accident.

            Tool man Shen QingShu immediately felt the call of duty. Eyes shining, he prepared to push the plot forward.

            “Don’t come looking for me in the future.” Shen QingShu was extremely self-aware.

            Han Cheng was shocked. “Why? Do you have feelings for someone else? Who is it?”

            Shen QingShu: … Darling, this reaction isn’t quite right.

            “I don’t accept this,” Han Cheng said, furious. “One day as husband and wife means a hundred days of grace. Can you even calculate how much grace we have?”

            Shen QingShu: … No, wait, what are you talking about? It’s not like I’m your wife. I’m just a tool man, and it’s time for me to go offline!

            However, Shen QingShu found that not only did the protagonist gong refuse to let him go offline, he was going to make him his bride!

            Shen QingShu: I’m crying.",
            'img' => '15.jpg'
        ]
    ];
    public function index(){
        $arrHobby = $this->arrHobby;
        return view('hobby', compact('arrHobby'));
    }

    public function detail($name){
        foreach ($this->arrHobby as $singleHobby){
            if($name == $singleHobby['name']){
                return view('detail', compact('singleHobby'));
            }
        }
    }
}

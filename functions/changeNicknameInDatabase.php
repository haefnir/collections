<?php
function changeNicknameInDatabase(int $id, ?string $nickname, PDO $db) {

        $hasNickname = $nickname==NULL ? 0 : 1;

        $query= $db->prepare(
        "UPDATE `user-pokemon`
        SET `nickname` = :nickname,
            `hasNickname` = :hasNickname
        WHERE `id` = :id
        LIMIT 1;");
        $query->bindParam(':nickname', $nickname);
        $query->bindParam(':hasNickname', $hasNickname);
        $query->bindParam(':id', $id);
        $query->execute();

}